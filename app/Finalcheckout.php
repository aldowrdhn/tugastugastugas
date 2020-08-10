<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finalcheckout extends Model
{
    protected $guarded = [];

    public function checkout() {
        return $this->belongsTo(Checkout::class, 'checkout_id', 'id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
