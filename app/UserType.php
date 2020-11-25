<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'users_type';
    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    // Eloquent Relationships
    public function user(){
        return $this->belongsTo('App\User');
    }
}
