<?php

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $categ_name = $faker->sentence(4);
    return [
        'categ_name' => $categ_name,
        'slug' => str_slug($categ_name),
        'description' => $faker->text(300),
    ];
});
