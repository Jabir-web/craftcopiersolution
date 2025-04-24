<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'img',
        'description',
        'status',
    ];

    protected static function booted()
    {
        static::deleting(function ($machine) {
            if ($machine->img && Storage::disk('public')->exists($machine->img)) {
                Storage::disk('public')->delete($machine->img);
            }
        });
    }
}
