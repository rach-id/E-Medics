<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Link::class, function (Faker $faker) {
    return [
        'titre' => substr($faker->sentence(2), 0, -1),
        'lien' => $faker->url,
        'description' => $faker->paragraph,
    ];
});
