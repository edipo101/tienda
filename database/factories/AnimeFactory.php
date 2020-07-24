<?php

use App\Anime;
use Faker\Generator as Faker;

$factory->define(App\Anime::class, function (Faker $faker) {
    return [
        'product_id' => rand(1, 30),
        'synopsis' => $faker->text(300),
        'episodes' => rand(10,25),
        'release_date' => $faker->sentence(2),
        'premiere' => rand(0, 1),
        'state' => $faker->randomElement(['FINALIZADO', 'EN EMISION']),
        'audio' => $faker->randomElement(['JAPONES', 'CASTELLANO', 'LATINO', 'JAP/CAST']),
    ];
});
