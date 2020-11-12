<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function user(){
        return $this->hasOne('\App\User', 'user_id');
    }
    
    public function product(){
    	return $this->hasOne('\App\Product' , 'product_id');
    }

    public function order(){
        return $this->belongsTo('\App\Order', 'order_id');
    }
}
