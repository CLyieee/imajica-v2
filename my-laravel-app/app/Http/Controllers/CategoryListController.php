<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Log;

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

    public function getCategory($id)
    {
        try {
            $category = category::findOrFail($id);
            return response()->json($category);
        } catch (\Exception $e) {
            Log::error('Error fetching category:', ['message' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch category details'
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        try {
            $categoryId = $request->input('category_id');
            $category = category::findOrFail($categoryId);
            
            $category->delete();
            return redirect()->route('page.category-list')->with('success', 'Category deleted successfully!');

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Category not found:', ['category_id' => $categoryId]);
            return redirect()->back()->with('error', 'Category not found');
            
        } catch (\Exception $e) {
            Log::error('Error deleting category:', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', 'An error occurred while deleting the category');
        }
    }

    public function update(Request $request)
    {
        try {
            Log::info('Received category update data:', $request->all());

            $data = $request->validate([
                'category_id' => 'required|exists:categories,category_id',
                'categoryTitle' => 'required|string|max:255',
                'description' => 'nullable|string',
                'categoryImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $category = category::findOrFail($request->category_id);
            
            // Update basic fields
            $category->categoryTitle = $request->categoryTitle;
            $category->description = $request->description;

            // Handle image upload if new image is provided
            if ($request->hasFile('categoryImage')) {
                // Delete old image if it exists
                if ($category->categoryImage && file_exists(public_path($category->categoryImage))) {
                    unlink(public_path($category->categoryImage));
                }
                
                $image = $request->file('categoryImage');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/categories'), $imageName);
                $category->categoryImage = 'uploads/categories/' . $imageName;
            }

            $category->save();

            return redirect()->route('page.category-list')
                ->with('success', 'Category updated successfully!');

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Category not found:', ['category_id' => $request->category_id]);
            return redirect()->back()
                ->with('error', 'Category not found')
                ->withInput();
                
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation errors:', $e->errors());
            throw $e;
            
        } catch (\Exception $e) {
            Log::error('Error updating category:', ['message' => $e->getMessage()]);
            return redirect()->back()
                ->with('error', 'An error occurred while updating the category: ' . $e->getMessage())
                ->withInput();
        }
    }
}
