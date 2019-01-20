<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->unique()->realText(20), "."),
        'name' => rtrim($faker->unique()->name(), "."),
        'position' => rtrim($faker->unique()->realText(15), "."),
        'image' => \Storage::disk('public')->putFile('avatars', new File($faker->image($dir = '/tmp', $width = 640, $height = 920, 'people'))),
        'about' => rtrim($faker->unique()->realText(1000), "."),
        'url' => rtrim($faker->optional()->url()),
        'instagram' => rtrim($faker->optional()->url()),
        'facebook' => rtrim($faker->optional()->url()),
        'email' => rtrim($faker->optional()->safeEmail),
        'phone' => rtrim($faker->optional()->phoneNumber)
    ];
});
