<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";
    protected $primaryKey = "id";

    protected $fillable = [
        'user_id',
        'reference',
        'subtotal',
        'shipping',
        'total',
        'date',
        'address_id',
        'city',
        'status',
        'validate',
    ];
    public function purchase(){
        return $this->hasMany('App\Models\ProductPurchase', 'order_id');
    }
}
