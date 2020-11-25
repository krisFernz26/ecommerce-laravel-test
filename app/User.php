<?php

namespace App;

use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'address', 'user_type_id'];

    // Eloquent Relationships
    public function userType(){
        return $this->hasOne('\App\UserType', 'user_type_id');
    }

    public function post(){
        return $this->hasMany('\App\Post');
    }

    public function order(){
        return $this->hasMany('\App\Order');
    }

    public function setPasswordAttribute($value)
{
    $this->attributes['password'] = Hash::make($value);
}
}
