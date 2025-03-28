<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coupon;
use App\Models\branch;
use Illuminate\Support\Facades\Log;

class CouponController extends Controller
{
    public function create(Request $request)
    {
        try {
            // Log the received data
            Log::info('Received coupon data:', $request->all());

            $data = $request->validate([
                'coupon_code' => 'required|unique:coupons',
                'discount_name' => 'required|min:3',  // matches form field
                'description' => 'required|min:10',
                'discount_type' => 'required|in:fixed,percentage',  // matches new select options
                'discount_value' => 'required|numeric|min:0',
                'applicable_service' => 'required',  // matches form field name
                'start_end_date' => 'required',
                'new_customer' => 'required|in:Yes,No',
                'branch_code' => 'required|exists:branches,branch_code'
            ], [
                'coupon_code.unique' => 'This coupon code already exists',
                'coupon_code.required' => 'Coupon code is required',
                'coupon_name.required' => 'Coupon name is required',
                'coupon_name.min' => 'Coupon name must be at least 3 characters',
                'description.required' => 'Description is required',
                'description.min' => 'Description must be at least 10 characters',
                'discount_type.required' => 'Please select a discount type',
                'discount_value.required' => 'Discount value is required',
                'discount_value.numeric' => 'Discount value must be a number',
                'applicable_service.required' => 'Please select at least one service',
                'start_end_date.required' => 'Please select start and end dates',
                'branch_code.required' => 'Please select a branch',
                'branch_code.exists' => 'Selected branch is invalid'
            ]);

            // Log if validation passes
            Log::info('Validation passed');
            
            $newCoupon = coupon::create($data);
            
            return redirect()->route('coupon-list')
                ->with('success', 'Coupon created successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log validation errors
            Log::error('Validation errors:', $e->errors());
            throw $e;
        } catch (\Exception $e) {
            Log::error('Other error:', ['message' => $e->getMessage()]);
            return back()
                ->withErrors(['error' => 'An error occurred while creating the coupon: ' . $e->getMessage()])
                ->withInput();
        }
    }


    public function update(Request $request) 
    {
        try {
            // Log the received data
            Log::info('Received coupon data:', $request->all());

            $data = $request->validate([
                'coupon_code' => 'required',
                'discount_name' => 'required|min:3',  // matches form field
                'description' => 'required|min:10',
                'discount_type' => 'required|in:fixed,percentage',  // matches new select options
                'discount_value' => 'required|numeric|min:0',
                'applicable_service' => 'required',  // matches form field name
                'start_end_date' => 'required',
                'new_customer' => 'required|in:Yes,No',
                'branch_code' => 'required|exists:branches,branch_code'
            ], [
                'coupon_code.required' => 'Coupon code is required',
                'coupon_name.required' => 'Coupon name is required',
                'coupon_name.min' => 'Coupon name must be at least 3 characters',
                'description.required' => 'Description is required',
                'description.min' => 'Description must be at least 10 characters',
                'discount_type.required' => 'Please select a discount type',
                'discount_value.required' => 'Discount value is required',
                'discount_value.numeric' => 'Discount value must be a number',
                'applicable_service.required' => 'Please select at least one service',
                'start_end_date.required' => 'Please select start and end dates',
                'branch_code.required' => 'Please select a branch',
                'branch_code.exists' => 'Selected branch is invalid'
            ]);

            // Log if validation passes
            Log::info('Validation passed');
            
            $coupon = coupon::where('coupon_code', $request->coupon_code)->first();
            
            if (!$coupon) {
                return redirect()->back()->with('error', 'Coupon not found');
            }

            $coupon->discount_name = $request->discount_name;
            $coupon->description = $request->description;
            $coupon->discount_type = $request->discount_type;
            $coupon->discount_value = $request->discount_value;
            $coupon->applicable_service = $request->applicable_service;
            $coupon->start_end_date = $request->start_end_date;
            $coupon->new_customer = $request->new_customer;
            $coupon->branch_code = $request->branch_code;
            $coupon->save();


            return redirect()->route('coupon-list')
                ->with('success', 'Coupon updated successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log validation errors
            Log::error('Validation errors:', $e->errors());
            throw $e;
        } catch (\Exception $e) {
            Log::error('Other error:', ['message' => $e->getMessage()]);
            return back()
                ->withErrors(['error' => 'An error occurred while updating the coupon: ' . $e->getMessage()])
                ->withInput();


        }

    }


    
    public function getBranch()
    {
        $branches = branch::all();
        return view('page.coupon-list', compact('coupons'));
    }
    
    // Add the missing get method to fetch a coupon's details
    public function get(Request $request)
    {
        try {
            $couponCode = $request->input('coupon_code');
            $coupon = coupon::where('coupon_code', $couponCode)->first();
            
            if (!$coupon) {
                return response()->json(['error' => 'Coupon not found'], 404);
            }
            
            return response()->json($coupon);
        } catch (\Exception $e) {
            Log::error('Error fetching coupon:', ['message' => $e->getMessage()]);
            return response()->json(['error' => 'Failed to fetch coupon details'], 500);
        }
    }
    
    // Add the missing delete method
    public function delete(Request $request)
    {
        try {
            $couponCode = $request->input('coupon_code');
            $coupon = coupon::where('coupon_code', $couponCode)->first();
            
            if (!$coupon) {
                return redirect()->back()->with('error', 'Coupon not found');
            }
            
            $coupon->delete();
            return redirect()->route('coupon-list')->with('success', 'Coupon deleted successfully!');
        } catch (\Exception $e) {
            Log::error('Error deleting coupon:', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', 'An error occurred while deleting the coupon: ' . $e->getMessage());
        }
    }
}
