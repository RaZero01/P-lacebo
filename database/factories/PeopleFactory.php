<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;

$factory->define(App\Person::class, function (Faker $faker) {
    $url = rand(0, 2) ? 'people.show' : 'contacts';
    return [
        'title' => rtrim($faker->unique()->realText(50), "."),
        'name' => rtrim($faker->unique()->name(), "."),
        'position' => rtrim($faker->unique()->realText(15), "."),
        'image' => \Storage::disk('public')->putFile('avatars', new File($faker->image($dir = '/tmp', $width = 640, $height = 920, 'people'))),
        'about' => rtrim($faker->unique()->realText(1000), "."),
        'url' => $url,
        'external_url' => rtrim($faker->optional()->url()),
        'instagram' => rtrim($faker->optional()->url()),
        'facebook' => rtrim($faker->optional()->url()),
        'email' => rtrim($faker->optional()->safeEmail),
        'phone' => rtrim($faker->optional()->phoneNumber),
        'contacts_label' => $url == 'contacts' ? rtrim('По вопросам '.$faker->realtext(20)) : ''
    ];
});
