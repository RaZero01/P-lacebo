<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
      'title' => rtrim($faker->unique()->realText(50, 3)),
      'image' => \Storage::disk('public')->putFile('events', new File($faker->image($dir = '/tmp', $width = 640, $height = 920, 'nature')))
    ];
});
