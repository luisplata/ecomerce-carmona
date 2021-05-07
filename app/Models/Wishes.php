<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishes extends Model
{
    protected $table = "wishes";
    protected $primaryKey = "id";
    public function product() {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
