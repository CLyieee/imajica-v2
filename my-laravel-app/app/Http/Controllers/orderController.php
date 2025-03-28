<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        try {
            DB::beginTransaction();

            // Create the order
            $order = Order::create([
                'order_date' => $request->order_date . ' ' . $request->order_time,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'payment_status' => $request->payment_status,
                'order_status' => $request->order_status,
                'payment_method' => $request->payment_method,
                'subtotal' => $request->subtotal,
                'tax' => $request->tax,
                'total' => $request->total
            ]);

            // Create order items
            foreach ($request->items as $item) {
                OrderItem::create([
                    'order_id' => $order->order_id,
                    'item_name' => $item['name'],
                    'quantity' => $item['quantity'],
                    'unit_price' => $item['price'],
                    'total' => $item['total']
                ]);
            }

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Order created successfully',
                'data' => $order
            ], 201);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create order',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
