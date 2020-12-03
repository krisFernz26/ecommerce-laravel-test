<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    
    protected $fillable = ['name', 'quantity', 'image', 'product_type_id', 'post_id'];

    // Eloquent Relationships
    public function product_type(){
        return $this->belongsTo('\App\ProductType');
    }

    public function post(){
        return $this->belongsTo('\App\Post');
    }

}
