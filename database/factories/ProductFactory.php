<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'stock' => $faker->randomDigit,
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 5000),
        'size' => 'small',
        'image' => 'product-1.jpg',
    ];
});
