<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    protected static function booted()
    {
        static::deleting(function ($machine) {
            if ($machine->image && Storage::disk('public')->exists($machine->image)) {
                Storage::disk('public')->delete($machine->image);
            }
        });
    }
}
