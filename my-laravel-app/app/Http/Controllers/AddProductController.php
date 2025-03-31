<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddProductController extends Controller
{
    public function index()
    {
        return view('page.add-product');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:products',
            'bar_code' => 'required|string|unique:products',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'base_price' => 'required|numeric|min:0',
            'discounted_price' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,category_id',
            'status' => 'required|in:Published,Scheduled,Inactive',
            'tags' => 'nullable|string',
            'shipping_type' => 'required|in:seller,company',
            'is_fragile' ,
            'is_biodegradable' , 
            'is_frozen',
            'max_temperature' => 'nullable|numeric',
            'expiry_date' => 'nullable|date',
            'in_stock',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle image upload
        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('products', 'public');
            $data['image'] = $imagePath;
        }

        // Convert checkbox values to boolean
        $booleanFields = ['is_fragile', 'is_biodegradable', 'is_frozen', 'in_stock'];
        foreach ($booleanFields as $field) {
            $data[$field] = $request->has($field);
        }

        try {
            $product = Product::create($data);
            return redirect()->route('page.product-list')
                           ->with('success', 'Product created successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to create product: ' . $e->getMessage())
                        ->withInput();
        }
    }
}
