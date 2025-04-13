<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waste;

class WasteController extends Controller
{
    public function index()
    {
        $wastes = Waste::all();
        return view('page.waste-list', compact('wastes'));
    }

    public function create()
    {
        return view('page.new-waste');
    }

    public function store(Request $request)
    {
        // Add validation and store logic
    }

    public function edit($id)
    {
        $waste = Waste::findOrFail($id);
        return view('page.edit-waste', compact('waste'));
    }

    public function update(Request $request, $id)
    {
        // Add validation and update logic
    }

    public function destroy($id)
    {
        // Add delete logic
    }
}
