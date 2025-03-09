<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessoryRequest;

class AccessoryRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'model_name' => 'required|string|max:255',
            'accessory' => 'required|string',
            'fullname' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
        ]);

        AccessoryRequest::create([
            'company_name' => $request->company_name,
            'model_name' => $request->model_name,
            'accessory' => $request->accessory,
            'fullname' => $request->fullname,
            'contact_number' => $request->contact_number,
        ]);

        return redirect()->back()->with('accessory', 'Request submitted successfully.');
    }
}