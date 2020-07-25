<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->name;
    $price = $faker->randomNumber(3);
    return [
        'brand' => $faker->company,
        'sku' => $faker->regexify('[A-Z]{3}-[A-Z]{2}-[A-Z]{3}' .
            '-[A-Z]{2}'),
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'description' => $faker->paragraph(3),
        'quantity' => $faker->numberBetween(500, 1000),
        'weight' => $faker->numberBetween(0, 100),
        'price' => $price,
        'sale_price' => $price - ($price*.15),
        'status' => $faker->numberBetween(0, 1),
        'featured' => $faker->numberBetween(0, 1),
        'shop_id' => $faker->numberBetween(1, 15),
        'ratings' => $faker->numberBetween(1, 5),
    ];
});
