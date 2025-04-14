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
            'sku' => 'required|string|unique:new_product',
            'name' => 'required|string|max:255',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,category_id',
            'supplier_id' => 'required|exists:suppliers,suppler_id',
            'base_price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'restock_point' => 'required|integer|min:0',
            'manufacturing_date' => 'required|date',
            'expiry_date' => 'required|date|after:manufacturing_date',
            'removal_date' => 'required|date|after_or_equal:expiry_date'
        ]);

        try {
            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/products'), $imageName);
                $data['product_image'] = 'uploads/products/' . $imageName;
            }

            $product = Product::create($data);

            return response()->json([
                'status' => 'success',
                'message' => 'Product created successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create product: ' . $e->getMessage()
            ], 500);
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
            $categories = \App\Models\category::all(); 
            $suppliers = \App\Models\Supplier::all(); 
            
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

            return view('page.edit-product', compact('product', 'categories', 'suppliers')); // Add categories here
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
                'sku' => 'required|string|unique:new_product,sku,' . $sku . ',sku',
                'name' => 'required|string|max:255',
                'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'category_id' => 'required|exists:categories,category_id',
                'supplier_id' => 'required|exists:suppliers,suppler_id',
                'base_price' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:0',
                'restock_point' => 'required|integer|min:0',
                'manufacturing_date' => 'nullable|date',
                'expiry_date' => 'nullable|date',
                'removal_date' => 'nullable|date'
            ], [
                'name.required' => 'Product name is required',
                'sku.required' => 'SKU is required',
                'sku.unique' => 'This SKU is already in use',
                'quantity.required' => 'Quantity is required',
                'quantity.min' => 'Quantity cannot be negative',
                'base_price.required' => 'Base price is required', 
                'base_price.min' => 'Base price cannot be negative',
                'category_id.required' => 'Please select a category',
                'category_id.exists' => 'Selected category is invalid',
                'supplier_id.required' => 'Please select a supplier',
                'supplier_id.exists' => 'Selected supplier is invalid',
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
