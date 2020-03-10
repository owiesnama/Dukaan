<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Collection::class, function (Faker $faker) {
    return [
        'name' => $faker->word(2),
        'description' => $faker->paragraph,
    ];
});
