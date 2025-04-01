<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get()->map(function($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'category' => $product->category->categoryTitle ?? 'Uncategorized',
                'stock_status' => $product->quantity > 0 ? 1 : 0,
                'sku' => $product->sku,
                'base_price' => $product->base_price,
                'quantity' => $product->quantity,
                'status' => $this->mapStatus($product->status),
                'product_image' => $product->product_image,
                'description' => $product->description
            ];
        });

        $categories = \App\Models\category::all()->pluck('categoryTitle')->toArray();

        return response()->json([
            'data' => $products,
            'categories' => $categories
        ]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }

    private function mapStatus($status)
    {
        return match($status) {
            'Published' => 2,
            'Scheduled' => 1,
            'Inactive' => 3,
            default => 3
        };
    }
}
