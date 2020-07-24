<?php

use Faker\Generator as Faker;

$factory->define(App\Drama::class, function (Faker $faker) {
    return [
        'product_id' => rand(1, 30),
        'synopsis' => $faker->text(300),
        'episodes' => rand(10,25),
        'premiere' => $faker->sentence(2),
        'state' => $faker->randomElement(['FINALIZADO', 'EN EMISION']),
    ];
});
