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
        'grain_size',
        'purity',
        'packaging',
        'packaging_type',
        'package_weight',
        'price',
        'price_unit',
        'product_type',
        'moq',
        'origin',
        'image_url',
        'short_desc',
        'full_desc',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function getDescriptionAttribute()
    {
        return $this->short_desc ?? $this->full_desc ?? '';
    }

    public function getFormattedPriceAttribute()
    {
        if ($this->price && $this->price > 0) {
            $unit = $this->price_unit ? ' / ' . ltrim($this->price_unit, '/') : '';
            return '$' . number_format($this->price, 2) . $unit;
        }
        return 'Custom Quote / Inquire';
    }

    public function categoryRef()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategoryRef()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
