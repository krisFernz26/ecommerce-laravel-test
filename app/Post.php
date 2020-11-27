<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    
    protected $fillable = ['title', 'description', 'user_id', 'sold'];

    // Eloquent Relationships
    public function user(){
        return $this->belongsTo('\App\User');
    }
    
    public function products(){
    	return $this->hasMany('\App\Product');
    }

    public function order(){
        return $this->hasOne('\App\Order');
    }
}
