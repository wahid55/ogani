<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'brand', 'sku', 'name', 'slug', 'description', 'quantity', 'weight', 'price', 'sale_price', 'status', 'featured', 'shop_id', 'ratings'
    ];
}
