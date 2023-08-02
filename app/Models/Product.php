<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['product_category_id', 'name', 'qty', 'price', 'description', 'path'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
    public function comments()
    {
        return $this->hasMany(ProductComment::class, 'product_id', 'id');
    }
}
