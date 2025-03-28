<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryListController extends Controller
{
    public function index(){
        $categories = category::all();
        return view('page.category-list', compact('categories'));
    }

    public function create(Request $request)
    {
        try {
            $data = $request->validate([
                'categoryTitle' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:categories',
                'description' => 'nullable|string',
                'categoryImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if ($request->hasFile('categoryImage')) {
                $image = $request->file('categoryImage');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/categories'), $imageName);
                $data['categoryImage'] = 'uploads/categories/' . $imageName;
            }

            $category = category::create($data);
            
            return response()->json([
                'success' => true,
                'message' => 'Category created successfully',
                'data' => $category
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
        return redirect(route('page.category-list'));
    }

    /**
     * Returns all categories
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll()
    {
        $categories = category::all();
        return response()->json($categories);
    }

    public function delete($id)
    {
        try {
            $category = category::findOrFail($id);
            
            // Delete the image file if it exists
            if ($category->categoryImage && file_exists(public_path($category->categoryImage))) {
                unlink(public_path($category->categoryImage));
            }
            
            $category->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Category deleted successfully'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting category: ' . $e->getMessage()
            ], 500);
        }
    }
}
