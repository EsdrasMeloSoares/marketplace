<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'stock',
        'discount',
        'discount_all',
        'is_active',
        'tamanhos',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    protected static function booted()
    {
        static::deleting(function ($product) {
            $product->images()->delete();
        });
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
