<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_types';
    public $timestamps = false;

    protected $fillable = ['name', 'description', 'user_id'];

    // Eloquent Relationships
    public function users(){
        return $this->hasMany('App\User');
    }
}
