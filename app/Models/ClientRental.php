<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientRental extends Model
{
    protected $fillable = [
        'client_name',
        'client_company_name',
        'city_name',
        'contact_number',
        'requirements',
    ];
}
