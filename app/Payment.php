<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    public $timestamps = false;

    public function payment_type(){
        return $this->belongsTo('App\User');
    }
}
