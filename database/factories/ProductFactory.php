<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'detailed_description' => implode('\n', $faker->paragraphs(5)),
        'price' => $faker->randomFloat(3),
        'published' => true,
        'code' => Str::random(3),
        'category_id' => factory(Category::class)->create()->id,
    ];
});
