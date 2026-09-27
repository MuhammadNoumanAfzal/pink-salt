<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ContactSubmission;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_products' => Product::count(),
            'active_products' => Product::where('is_active', true)->count(),
            'total_quotes' => QuoteRequest::count(),
            'pending_quotes' => QuoteRequest::where('status', 'pending')->count(),
            'total_inquiries' => ContactSubmission::count(),
            'unread_inquiries' => ContactSubmission::where('status', 'new')->count(),
        ];

        $products = Product::latest()->get();
        $quotes = QuoteRequest::latest()->get();
        $inquiries = ContactSubmission::latest()->get();

        return view('admin.dashboard', compact('stats', 'products', 'quotes', 'inquiries'));
    }

    public function productsIndex()
    {
        $products = Product::with(['categoryRef', 'subcategoryRef'])->latest()->get();
        $categories = \App\Models\Category::with('allSubcategories')->get();
        return view('admin.products.index', compact('products', 'categories'));
    }

    public function productsCreate()
    {
        $categories = \App\Models\Category::with('allSubcategories')->where('is_active', true)->get();
        return view('admin.products.create', compact('categories'));
    }

    public function productsEdit($id)
    {
        $product = Product::with(['categoryRef', 'subcategoryRef'])->findOrFail($id);
        $categories = \App\Models\Category::with('allSubcategories')->where('is_active', true)->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'category' => 'nullable|string|max:255',
            'badge' => 'nullable|string|max:100',
            'grade' => 'nullable|string|max:100',
            'mesh_size' => 'nullable|string|max:100',
            'purity' => 'nullable|string|max:100',
            'packaging' => 'nullable|string|max:255',
            'short_desc' => 'required|string',
            'full_desc' => 'nullable|string',
            'image_url' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'is_featured' => 'nullable',
            'is_active' => 'nullable',
        ]);

        $imageUrl = $validated['image_url'] ?? '/product1.jpg';

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $filename = time() . '_' . \Str::slug($validated['name']) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/products');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            $file->move($destinationPath, $filename);
            $imageUrl = '/uploads/products/' . $filename;
        }

        $catName = $validated['category'] ?? null;
        if (!empty($validated['category_id'])) {
            $catModel = \App\Models\Category::find($validated['category_id']);
            if ($catModel) $catName = $catModel->name;
        }

        $product = Product::create([
            'name' => $validated['name'],
            'slug' => \Str::slug($validated['name']),
            'category_id' => $validated['category_id'] ?? null,
            'subcategory_id' => $validated['subcategory_id'] ?? null,
            'category' => $catName ?? 'Edible Pink Salt',
            'badge' => $validated['badge'] ?? null,
            'grade' => $validated['grade'] ?? null,
            'mesh_size' => $validated['mesh_size'] ?? null,
            'purity' => $validated['purity'] ?? null,
            'packaging' => $validated['packaging'] ?? null,
            'short_desc' => $validated['short_desc'],
            'full_desc' => $validated['full_desc'] ?? $validated['short_desc'],
            'image_url' => $imageUrl,
            'is_featured' => $request->has('is_featured') || $request->input('is_featured') == '1',
            'is_active' => $request->has('is_active') || $request->input('is_active') == '1',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Product created successfully!',
            'product' => $product
        ]);
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'category' => 'nullable|string|max:255',
            'badge' => 'nullable|string|max:100',
            'grade' => 'nullable|string|max:100',
            'mesh_size' => 'nullable|string|max:100',
            'purity' => 'nullable|string|max:100',
            'packaging' => 'nullable|string|max:255',
            'short_desc' => 'required|string',
            'full_desc' => 'nullable|string',
            'image_url' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'is_featured' => 'nullable',
            'is_active' => 'nullable',
        ]);

        $imageUrl = $product->image_url;

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $filename = time() . '_' . \Str::slug($validated['name']) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/products');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            $file->move($destinationPath, $filename);
            $imageUrl = '/uploads/products/' . $filename;
        } elseif (!empty($validated['image_url'])) {
            $imageUrl = $validated['image_url'];
        }

        $catName = $validated['category'] ?? $product->category;
        if (!empty($validated['category_id'])) {
            $catModel = \App\Models\Category::find($validated['category_id']);
            if ($catModel) $catName = $catModel->name;
        }

        $product->update([
            'name' => $validated['name'],
            'slug' => \Str::slug($validated['name']),
            'category_id' => $validated['category_id'] ?? null,
            'subcategory_id' => $validated['subcategory_id'] ?? null,
            'category' => $catName,
            'badge' => $validated['badge'] ?? null,
            'grade' => $validated['grade'] ?? null,
            'mesh_size' => $validated['mesh_size'] ?? null,
            'purity' => $validated['purity'] ?? null,
            'packaging' => $validated['packaging'] ?? null,
            'short_desc' => $validated['short_desc'],
            'full_desc' => $validated['full_desc'] ?? $validated['short_desc'],
            'image_url' => $imageUrl,
            'is_featured' => $request->has('is_featured') || $request->input('is_featured') == '1',
            'is_active' => $request->has('is_active') || $request->input('is_active') == '1',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Product updated successfully!',
            'product' => $product
        ]);
    }

    public function toggleProductStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->is_active = !$product->is_active;
        $product->save();

        return response()->json([
            'success' => true,
            'message' => 'Product status updated!',
            'is_active' => $product->is_active
        ]);
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product deleted successfully!'
        ]);
    }

    public function updateQuoteStatus(Request $request, $id)
    {
        $quote = QuoteRequest::findOrFail($id);
        $request->validate(['status' => 'required|in:pending,processing,completed,cancelled']);
        
        $quote->status = $request->status;
        $quote->save();

        return response()->json([
            'success' => true,
            'message' => 'Order status updated to ' . ucfirst($request->status)
        ]);
    }

    public function deleteQuote($id)
    {
        $quote = QuoteRequest::findOrFail($id);
        $quote->delete();

        return response()->json([
            'success' => true,
            'message' => 'Order deleted successfully!'
        ]);
    }

    public function updateContactStatus(Request $request, $id)
    {
        $contact = ContactSubmission::findOrFail($id);
        $request->validate(['status' => 'required|in:new,read,replied,archived']);
        
        $contact->status = $request->status;
        $contact->save();

        return response()->json([
            'success' => true,
            'message' => 'Message status updated to ' . ucfirst($request->status)
        ]);
    }

    public function deleteContact($id)
    {
        $contact = ContactSubmission::findOrFail($id);
        $contact->delete();

        return response()->json([
            'success' => true,
            'message' => 'Message deleted successfully!'
        ]);
    }
}
