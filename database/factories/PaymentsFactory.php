<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payments;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [


    	'payment_type_id' => mt_rand(1,3),
    	'payment_date'=>$faker->dateTime(),
    	'payment_amount' =>$faker->numberBetween($min = 1000, $max = 50,000)

    ];
});