<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponController extends Controller
{
    
    public function create(Request $request)
    {
        $data = $request->validate([
            'coupon_code' => 'required',
            'coupon_name' => 'required',
            'description' => 'required',
            'discount_type' => 'required',
            'discount_value' => 'required',
            'applicable_service' => 'required',
            'start_end_date' => 'required',
            'new_customer' => 'required',
            'branch_code' => 'required'
        ]);

        $coupon = Coupon::create($data);

        return redirect()->route('page.new-coupon');
    }
    public function getBranch()
    {
        $branches = branch::all();
        return view('page.coupon-list', compact('coupons'));
    }
    
}
