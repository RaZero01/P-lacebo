<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

$factory->define(App\Collection::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->realText(20, 2), "."),
        'image' => Storage::disk('public')->putFile('collections', new File($faker->image())),
        'name' => rtrim($faker->realText(25, 3))
    ];
});
