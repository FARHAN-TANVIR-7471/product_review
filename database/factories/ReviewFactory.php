<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Review;
use App\Models\Product;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
    	'product_id' => function(){
    		return Product::all()->random();
    	},
        'customer' => $faker->name,
        'product_id' => function(){
    		return User::all()->random();
    	},
        'review' => $faker->name,
        'star' => $faker->numberBetween(0,5)
        
    ];
});
