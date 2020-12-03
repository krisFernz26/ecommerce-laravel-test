<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [

    	'product_type_id' => mt_rand(1,5),
    	'post_id' => mt_rand(1,20),
    	'name' => $faker->word,
    	'quantity' => mt_rand(0, 20),
    	'image' => $faker->imageUrl()
    ];
});
