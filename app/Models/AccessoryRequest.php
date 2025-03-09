<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessoryRequest extends Model
{
    protected $fillable = [
        'company_name',
        'model_name',
        'accessory',
        'fullname',
        'contact_number',
    ];
}
