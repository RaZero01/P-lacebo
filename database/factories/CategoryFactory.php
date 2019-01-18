<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->realText(15, 1), "."),
        'image' => Storage::disk('public')->putFile('categories', new File($faker->image())),
    ];
});
