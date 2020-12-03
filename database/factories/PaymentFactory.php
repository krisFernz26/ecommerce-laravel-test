<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
    	
    	
    	'payment_type_id' => mt_rand(1,3),
    	'payment_amount' => mt_rand(0, 100000),
		'order_id' => mt_rand(1, 50)

    ];
});
