<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $name = $faker->sentence(3);
    return [
        // 'type' => $faker->randomElement(['ANIME', 'DORAMA', 'ARTICULO', 'COMESTIBLE', 'PRENDA']),
        'type' => $faker->randomElement(['ANIME', 'ARTICULO']),
        'name' => $name,
        'slug' => str_slug($name),
        'description' => $faker->text(300),
        'barcode' => $faker->ean13(),
        'purchase_price' => rand(5, 30),
        'sale_price' => rand(5, 30),
        'category_id' => rand(1, 6),
        // 'folder_image' => $faker->randomElement(['animes', 'dramas', 'articles', 'edibles', 'clothing']),
        'folder_image' => $faker->randomElement(['animes', 'articles']),
        'image' => 'product-'.rand(1, 20).'.jpg',
    ];
});
