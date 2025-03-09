<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientRepair extends Model
{
    protected $fillable = [
        'client_name',
        'contact_number',
        'company_name',
        'model_name',
        'problem_description',
    ];
}
