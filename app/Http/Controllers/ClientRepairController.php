<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientRepair;

class ClientRepairController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'model_name' => 'required|string|max:255',
            'problem_description' => 'required|string',
        ]);

        ClientRepair::create([
            'client_name' => $request->client_name,
            'contact_number' => $request->contact_number,
            'company_name' => $request->company_name,
            'model_name' => $request->model_name,
            'problem_description' => $request->problem_description,
        ]);

        return redirect()->back()->with('repair', 'Repair Request submitted successfully.');
    }
}