<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

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
            $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $imageName);
            $data['product_image'] = 'uploads/products/' . $imageName;
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


    public function edit($sku)
    {
        try {
            Log::info('Edit product request received', [
                'sku' => $sku,
                'method' => request()->method(),
                'url' => request()->url()
            ]);
            
            $product = Product::where('sku', $sku)->first();
            $categories = \App\Models\category::all(); // Add this line
            
            if (!$product) {
                Log::error('Product not found', ['sku' => $sku]);
                return redirect()->route('page.product-list')
                    ->with('error', 'Product not found with SKU: ' . $sku);
            }
            
            Log::info('Product found', [
                'sku' => $sku,
                'product_name' => $product->name,
                'product_data' => $product->toArray()
            ]);

            return view('page.edit-product', compact('product', 'categories')); // Add categories here
        } catch (\Exception $e) {
            Log::error('Error in edit product', [
                'sku' => $sku,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->route('page.product-list')
                ->with('error', 'Error loading product: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $sku) 
    {
        try {
            Log::info('Update product request received', [
                'sku' => $sku,
                'request_data' => $request->all()
            ]);

            $product = Product::where('sku', $sku)->firstOrFail();
            
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'sku' => 'required|string|unique:products,sku,' . $sku . ',sku',
                'bar_code' => 'required|string|unique:products,bar_code,' . $product->bar_code . ',bar_code',
                'description' => 'nullable|string',
                'quantity' => 'required|integer|min:0',
                'base_price' => 'required|numeric|min:0',
                'discounted_price' => 'nullable|numeric|min:0',
                'category_id' => 'required|exists:categories,category_id',
                'status' => 'required|in:Published,Scheduled,Inactive',
                'tags' => 'nullable|string',
                'shipping_type' => 'nullable|string|in:seller,company',
                'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ], [
                'name.required' => 'Product name is required',
                'sku.required' => 'SKU is required',
                'sku.unique' => 'This SKU is already in use',
                'bar_code.required' => 'Barcode is required',
                'bar_code.unique' => 'This barcode is already in use',
                'quantity.required' => 'Quantity is required',
                'quantity.min' => 'Quantity cannot be negative',
                'base_price.required' => 'Base price is required',
                'base_price.min' => 'Base price cannot be negative',
                'category_id.required' => 'Please select a category',
                'category_id.exists' => 'Selected category is invalid',
                'status.required' => 'Status is required',
                'product_image.image' => 'The file must be an image',
                'product_image.mimes' => 'Supported image formats are: jpeg, png, jpg, gif'
            ]);

            // Handle image upload
            if ($request->hasFile('product_image')) {
                // Delete old image if exists
                if ($product->product_image) {
                    Storage::delete($product->product_image);
                }
                
                $image = $request->file('product_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('products', $imageName, 'public');
                $data['product_image'] = 'storage/' . $imagePath;
            }

            // Convert checkbox values to boolean
            $booleanFields = ['is_fragile', 'is_biodegradable', 'is_frozen', 'in_stock'];
            foreach ($booleanFields as $field) {
                $data[$field] = $request->has($field);
            }

            Log::info('Updating product with data', [
                'sku' => $sku,
                'data' => $data
            ]);

            $product->update($data);

            Log::info('Product updated successfully', [
                'sku' => $sku,
                'updated_data' => $product->fresh()->toArray()
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Product updated successfully!'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation errors:', $e->errors());
            return response()->json([
                'status' => 'error',
                'message' => 'The given data was invalid.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Error updating product', [
                'sku' => $sku,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while updating the product: ' . $e->getMessage()
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        try {
            $sku = $request->input('sku');
            $product = Product::where('sku', $sku)->first();
            
            if (!$product) {
                return redirect()->back()->with('error', 'Product not found');
            }
            
            // Delete product image if exists
            if ($product->product_image) {
                Storage::delete($product->product_image);
            }
            
            $product->delete();
            return redirect()->route('page.product-list')
                ->with('success', 'Product deleted successfully!');
        } catch (\Exception $e) {
            Log::error('Error deleting product:', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', 'An error occurred while deleting the product: ' . $e->getMessage());
        }
    }
}
