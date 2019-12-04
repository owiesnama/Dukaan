<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User'),
        'product_id' => factory('App\Product'),
        'body' => $faker->paragraph,
    ];
});
