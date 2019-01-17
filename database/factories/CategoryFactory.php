<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => rtrim($faker->sentence(1), "."),
        'image' => Storage::disk('public')->putFile('categories', new File($faker->image())),
    ];
});
