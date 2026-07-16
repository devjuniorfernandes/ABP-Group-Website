<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'client',
        'location',
        'year',
        'cover_image',
        'gallery_images',
        'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];
}
