<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
    
    protected $fillable = ['user_id', 'post_id'];

    // Eloquent Relationships
    public function user(){
        return $this->belongsTo('\App\User');
    }
    
    public function post(){
    	return $this->belongsTo('\App\Post');
    }

    public function payment(){
    	return $this->hasOne('\App\Payment');
    }
}
