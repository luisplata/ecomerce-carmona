<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $primaryKey = "id";
    public function category() {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function artist() {
        return $this->belongsTo('App\Models\Artist', 'artist_id');
    }
    public function images() {
        return $this->hasMany('App\Models\ProductImages', 'product_id');
    }
}
