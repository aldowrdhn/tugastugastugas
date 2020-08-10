<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'size_products', 'size_id', 'product_id');
    }
}
