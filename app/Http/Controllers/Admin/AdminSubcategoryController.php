<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminSubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::with('category')->withCount('products')->latest()->get();
        $categories = Category::all();
        return view('admin.subcategories.index', compact('subcategories', 'categories'));
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

        return response()->json([
            'success' => true,
            'message' => 'Subcategory created successfully!',
            'subcategory' => $subcategory->load('category')
        ]);
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

        return response()->json([
            'success' => true,
            'message' => 'Subcategory updated successfully!',
            'subcategory' => $subcategory->load('category')
        ]);
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
