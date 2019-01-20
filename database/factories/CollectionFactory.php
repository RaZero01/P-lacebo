<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(App\Collection::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->unique()->realText(30, 2), "."),
        'image' => \Storage::disk('public')->putFile('collections', new File($faker->image($dir = '/tmp', $width = 640, $height = 920, 'fashion'))),
        'name' => rtrim($faker->optional()->realText(25, 3))
    ];
});
