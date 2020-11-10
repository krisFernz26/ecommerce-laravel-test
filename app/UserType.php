<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'users_type';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
