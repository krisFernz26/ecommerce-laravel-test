<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->text,
        'description' => $faker->text,
        'user_id' => mt_rand(1, 50),
        'sold' => mt_rand(0, 1)
    ];
});
