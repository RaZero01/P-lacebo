<?php

use Faker\Generator as Faker;

$factory->define(App\CollectionItem::class, function (Faker $faker) {
    return [
        'name' => rtrim($faker->unique()->realText(40, 2)),
        'type' => rtrim($faker->unique()->realText(25, 2)),
        'author' => rtrim($faker->unique()->name()),
        'info' => rtrim($faker->unique()->realText(50, 5)),
        'about' => rtrim($faker->unique()->realText(100)),
    ];
});
