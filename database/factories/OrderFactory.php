<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
    	'user_id' => mt_rand(1,50),
    	'post_id' => mt_rand(1,50)
    ];
});
