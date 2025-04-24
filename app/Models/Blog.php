<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'img', // This is your image column
        'category',
        'description',
        'views',
        'likes',
        'status',
    ];

    protected static function booted()
    {
        static::deleting(function ($blog) {
            if ($blog->img && Storage::disk('public')->exists($blog->img)) {
                Storage::disk('public')->delete($blog->img);
            }
        });
    }
}
