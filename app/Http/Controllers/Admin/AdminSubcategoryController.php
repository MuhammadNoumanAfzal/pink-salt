<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminSubcategoryController extends Controller
{
    public function index(Request $request)
    {
        $totalSubcategories = Subcategory::count();
        $activeSubcategories = Subcategory::where('is_active', true)->count();
        $totalParentCategories = Category::count();
        $categories = Category::orderBy('name')->get();

        $query = Subcategory::with('category')->withCount('products');

        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category_id') && $request->category_id !== '') {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('is_active', $request->status === 'active' ? 1 : 0);
        }

        $perPage = (int) $request->input('per_page', 10);
        if (!in_array($perPage, [5, 10, 25, 50])) {
            $perPage = 10;
        }

        $subcategories = $query->latest()->paginate($perPage)->withQueryString();

        return view('admin.subcategories.index', compact('subcategories', 'categories', 'totalSubcategories', 'activeSubcategories', 'totalParentCategories'));
    }

    public function create()
    {
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        return view('admin.subcategories.create', compact('categories'));
    }

    public function show($id)
    {
        $subcategory = Subcategory::with(['category', 'products'])->withCount('products')->findOrFail($id);
        return view('admin.subcategories.show', compact('subcategory'));
    }

    public function edit($id)
    {
        $subcategory = Subcategory::with('category')->findOrFail($id);
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        return view('admin.subcategories.edit', compact('subcategory', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255|unique:subcategories,name',
            'description' => 'nullable|string',
            'is_active' => 'nullable',
        ]);

        $subcategory = Subcategory::create([
            'category_id' => $validated['category_id'],
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'description' => $validated['description'] ?? null,
            'is_active' => $request->has('is_active') || $request->input('is_active') == '1',
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Subcategory created successfully!',
                'subcategory' => $subcategory->load('category')
            ]);
        }

        return redirect()->route('admin.subcategories.index')->with('success', 'Subcategory created successfully!');
    }

    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::findOrFail($id);

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255|unique:subcategories,name,' . $id,
            'description' => 'nullable|string',
            'is_active' => 'nullable',
        ]);

        $subcategory->update([
            'category_id' => $validated['category_id'],
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'description' => $validated['description'] ?? null,
            'is_active' => $request->has('is_active') || $request->input('is_active') == '1',
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Subcategory updated successfully!',
                'subcategory' => $subcategory->load('category')
            ]);
        }

        return redirect()->route('admin.subcategories.index')->with('success', 'Subcategory updated successfully!');
    }

    public function toggleStatus($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->is_active = !$subcategory->is_active;
        $subcategory->save();

        return response()->json([
            'success' => true,
            'message' => 'Subcategory status updated!',
            'is_active' => $subcategory->is_active
        ]);
    }

    public function destroy($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->delete();

        return response()->json([
            'success' => true,
            'message' => 'Subcategory deleted successfully!'
        ]);
    }
}
