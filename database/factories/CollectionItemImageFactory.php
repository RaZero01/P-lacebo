<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(App\CollectionItemImage::class, function (Faker $faker) {
    return [
        'image' => \Storage::disk('public')->putFile('collections/items', new File($faker->image($dir = '/tmp', $width = 640, $height = 920, 'fashion')))
    ];
});
