<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function product_types(){
        return $this->hasOne('\App\ProductType', 'product_type_id');
    }

    public function post(){
        return $this->belongsTo('\App\Post');
    }

}
