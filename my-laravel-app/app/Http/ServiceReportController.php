<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceProductController extends Controller
{
    public function index()
    {
        return view('page.service-product');
    }

}
