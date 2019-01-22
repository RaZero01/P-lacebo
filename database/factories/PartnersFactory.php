<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(App\Partner::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->unique()->realText(40, 2)),
        'name' => rtrim($faker->unique()->realText(25, 1)),
        'url' => rtrim($faker->unique()->url()),
        'image' => \Storage::disk('public')->putFile('partners', new File($faker->image($dir = '/tmp', $width = 640, $height = 920, 'business')))
    ];
});
