<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of blog posts for JSON/Admin view.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return response()->json(['success' => true, 'posts' => $posts]);
    }

    /**
     * Display the create blog article page.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Display the edit blog article page.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.blogs.edit', compact('post'));
    }

    /**
     * Store a newly created blog post.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'nullable|string|max:100',
            'author' => 'nullable|string|max:100',
            'read_time' => 'nullable|string|max:50',
            'excerpt' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:5120',
            'image_url' => 'nullable|string',
        ]);

        $imageUrl = $request->input('image_url', '/product1.jpg');

        // Handle Image File Upload from Computer
        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            
            $uploadPath = public_path('uploads/blogs');
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }
            
            $file->move($uploadPath, $filename);
            $imageUrl = '/uploads/blogs/' . $filename;
        }

        $slug = $request->input('slug') ? Str::slug($request->input('slug')) : Str::slug($request->title);
        
        // Ensure unique slug
        $originalSlug = $slug;
        $count = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        $post = Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $request->excerpt ?: Str::limit(strip_tags($request->content), 150),
            'content' => $request->content,
            'image_url' => $imageUrl,
            'author' => $request->author ?: 'SALTORA Export Desk',
            'category' => $request->category ?: 'Export Insights',
            'read_time' => $request->read_time ?: '5 min read',
            'is_published' => $request->has('is_published') ? (bool)$request->is_published : true,
            'is_featured' => $request->has('is_featured') ? (bool)$request->is_featured : false,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Blog article published successfully!',
            'post' => $post
        ]);
    }

    /**
     * Update an existing blog post.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'nullable|string|max:100',
            'author' => 'nullable|string|max:100',
            'read_time' => 'nullable|string|max:50',
            'excerpt' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:5120',
            'image_url' => 'nullable|string',
        ]);

        $imageUrl = $post->image_url;
        if ($request->filled('image_url')) {
            $imageUrl = $request->image_url;
        }

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            
            $uploadPath = public_path('uploads/blogs');
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }
            
            $file->move($uploadPath, $filename);
            $imageUrl = '/uploads/blogs/' . $filename;
        }

        $slug = $request->input('slug') ? Str::slug($request->input('slug')) : Str::slug($request->title);
        if ($slug !== $post->slug) {
            $originalSlug = $slug;
            $count = 1;
            while (Post::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = "{$originalSlug}-{$count}";
                $count++;
            }
        }

        $post->update([
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $request->excerpt ?: Str::limit(strip_tags($request->content), 150),
            'content' => $request->content,
            'image_url' => $imageUrl,
            'author' => $request->author ?: 'SALTORA Export Desk',
            'category' => $request->category ?: 'Export Insights',
            'read_time' => $request->read_time ?: '5 min read',
            'is_published' => $request->has('is_published') ? (bool)$request->is_published : false,
            'is_featured' => $request->has('is_featured') ? (bool)$request->is_featured : false,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Blog article updated successfully!',
            'post' => $post
        ]);
    }

    /**
     * Toggle blog publication status.
     */
    public function toggleStatus($id)
    {
        $post = Post::findOrFail($id);
        $post->is_published = !$post->is_published;
        $post->save();

        return response()->json([
            'success' => true,
            'message' => 'Publication status updated to ' . ($post->is_published ? 'Published' : 'Draft')
        ]);
    }

    /**
     * Delete a blog post.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json([
            'success' => true,
            'message' => 'Blog article deleted successfully.'
        ]);
    }
}
