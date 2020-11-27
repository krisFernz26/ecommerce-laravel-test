<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = ['payment_type_id', 'order_id', 'payment_amount'];

    // Eloquent Relationships
    public function payment_type(){
        return $this->belongsTo('App\PaymentType');
    }

    public function order(){
        return $this->belongsTo('\App\Order');
    }
}
