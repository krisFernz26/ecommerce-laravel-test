<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    
    protected $fillable = ['title', 'description', 'user_id', 'product_id', 'sold'];

    // Eloquent Relationships
    public function user(){
        return $this->belongsTo('\App\User');
    }
    
    public function product(){
    	return $this->hasOne('\App\Product' , 'product_id');
    }

    public function order(){
        return $this->belongsTo('\App\Order', 'order_id');
    }
}
