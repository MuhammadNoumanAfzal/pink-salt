<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name',
        'slug',
        'category',
        'badge',
        'grade',
        'mesh_size',
        'purity',
        'packaging',
        'image_url',
        'short_desc',
        'full_desc',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function categoryRef()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategoryRef()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
