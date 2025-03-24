<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Illuminate\Support\Facades\Validator;

class serviceController extends Controller
{
   public function create(Request $request) {
        $data = $request->validate([
            'service_name' => 'required',
            'branch_code' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'service_category' => 'required',
            'service_cost' => 'required',
            'loyalty_pts' => 'required',
        ]);

        $newService = service::create($data);
        
        return redirect(route('page.new-services'));
    }


    public function getServices()
    {
        $services = service::all();
        return view('page.services-list', compact('services'));
    }


}
