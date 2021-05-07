<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = "artist";
    protected $primaryKey = "id";

    public function product() {
        return $this->hasMany('App\Models\Product', 'artist_id');
    }
    public function category() {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
