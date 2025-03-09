<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientRental;

class ClientRentalController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_company_name' => 'required|string|max:255',
            'city_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'requirements' => 'required|string',
        ]);

        ClientRental::create([
            'client_name' => $request->client_name,
            'client_company_name' => $request->client_company_name,
            'city_name' => $request->city_name,
            'contact_number' => $request->contact_number,
            'requirements' => $request->requirements,
        ]);

        return redirect()->back()->with('rent', 'Rental Request submitted successfully.');
    }
}