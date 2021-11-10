<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker -> word,
        'price' => $faker -> numberBetween(100,1000),
        'discount' => $faker -> numberBetween(10,30),
        'description' => $faker -> paragraph,
        'image' => $faker -> imageUrl($width = 640, $height = 480)
    ];
});
