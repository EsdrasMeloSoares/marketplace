<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'category_id');  // Relacionamento com 'category_id'
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
    
}
