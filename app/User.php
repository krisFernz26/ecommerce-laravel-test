<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function userType(){
        return $this->hasOne('\App\UserType', 'user_type_id');
    }

    public function post(){
        return $this->belongsTo('\App\Post');
    }

    public function order(){
        return $this->belongsTo('\App\Order');
    }
}
