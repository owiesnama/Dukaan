<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $category = factory(Category::class)->create();
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'detailed_description' => implode('\n', $faker->paragraphs(5)),
        'price' => $faker->randomFloat(3),
        'published' => true,
        'code' => $category->code . str_pad($category->products()->count() + 1, 3, '0'),
        'category_id' => $category,
    ];
});
