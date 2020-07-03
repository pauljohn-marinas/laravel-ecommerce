<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
        'product_id' => $faker->numberBetween($min = 1, $max = 50),
        'quantity' => $faker->randomDigit,
        'total' => '0.0',
    ];
});
