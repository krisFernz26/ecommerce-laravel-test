<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
    
    public function user(){
        return $this->hasOne('\App\User', 'user_id');
    }
    
    public function post(){
    	return $this->hasOne('\App\Post' , 'post_id');
    }

    public function payment(){
    	return $this->hasOne('\App\Payment' , 'payment_id');
    }
}
