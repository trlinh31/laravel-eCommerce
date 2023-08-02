<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;
    protected $table = 'product_comments';
    protected $fillable  = ['product_id', 'user_id', 'messages'];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
