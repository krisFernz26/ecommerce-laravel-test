<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function userType(){
        return $this->hasOne('\App\UserType', 'user_type_id');
    }
}
