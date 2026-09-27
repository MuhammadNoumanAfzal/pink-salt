<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image_url',
        'author',
        'category',
        'read_time',
        'is_published',
        'is_featured',
        'views',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'views' => 'integer',
    ];

    /**
     * Scope query to get published posts only.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope query to get featured posts.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Automatically format or default image URL.
     */
    public function getImageUrlAttribute($value)
    {
        if (empty($value)) {
            return '/product1.jpg';
        }
        return $value;
    }
}
