<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $table = 'payment_types';
    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    // Eloquent Relationships
    public function payment(){
        return $this->belongsTo('App\Payment');
    }
}
