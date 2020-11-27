<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';
    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    // Eloquent Relationships
    public function products(){
        return $this->hasMany('App\Product');
    }
}
