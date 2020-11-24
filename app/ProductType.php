<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';
    public $timestamps = false;

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
