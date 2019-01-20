<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->unique()->realText(15, 1), "."),
        'image' => \Storage::disk('public')->putFile('categories', new File($faker->image($dir = '/tmp', $width = 640, $height = 920, 'fashion'))),
    ];
});
