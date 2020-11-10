<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    /*public function userId(){
        return $this->hasOne('\App\User', 'user_id');
    }
    public function productId(){
    	return $this->hasOne('\App\Product' , 'product_id');
    }*/
}
