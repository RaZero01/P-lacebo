<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => rtrim($faker->sentence(rand(5, 10)), "."),
        'image' => $faker->image('public/images/categories', 400, 300, null, false)
    ];
});
