<?php

namespace App\Http\Controllers;
use App\Models\category_expense;
use Illuminate\Http\Request;

class category_expenseController extends Controller
{
    public function index()
    {
        $categories = category_expense::all();
        return view('page.category-expense-list', compact('categories'));
    }
    
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:category_expenses',
            'description' => 'nullable|string',
        ]);

        $category = category_expense::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Category created successfully',
            'data' => $category
        ]);
    }

    public function getAll()
    {
        $categories = category_expense::all();
        return response()->json($categories);
    }

    public function getCategory($id)
    {
        $category = category_expense::find($id);
        if ($category) {
            return response()->json($category);
        } else {
            return response()->json(['message' => 'Category not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $category = category_expense::find($id);
        if ($category) {
            $data = $request->validate([
                'name' => 'required|string|max:255|unique:category_expenses,name,' . $id . ',category_expense_id',
                'description' => 'nullable|string',
            ]);

            $category->update($data);
            
            return response()->json([
                'success' => true,
                'message' => 'Category updated successfully',
                'data' => $category
            ]);

            return redirect(route('page.categoryexpenses-list'));
        } else {
            return response()->json(['message' => 'Category not found'], 404);
        }
    }

    public function delete($id)
    {
        $category = category_expense::find($id);
        if ($category) {
            $category->delete();
            
            if (request()->wantsJson()) {
                return response()->json(['message' => 'Category deleted successfully']);
            }
            
            return redirect()->back()->with('success', 'Category deleted successfully');
        } else {
            return response()->json(['message' => 'Category not found'], 404);
        }
    }
}
