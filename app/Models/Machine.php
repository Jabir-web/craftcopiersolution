<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'name',
        'product_id',
        'image',
        'short_description',
        'brochure_link',
        'driver_link',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
