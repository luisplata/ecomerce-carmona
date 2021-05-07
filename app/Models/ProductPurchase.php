<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPurchase extends Model
{
    protected $table = "product_purchase";
    protected $primaryKey = "id";

    protected $fillable = [
        'order_id',
        'products_id',
        'price_pro',
        'discount',
        'total',
    ];
    public function product() {
        return $this->belongsTo('App\Models\Product', 'products_id');
    }
}
