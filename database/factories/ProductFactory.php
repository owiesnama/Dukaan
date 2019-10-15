<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'price' => $faker->randomFloat(3),
        'published' => true,
        'category_id' => factory(Category::class)->create()->id,
    ];
});
