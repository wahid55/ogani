<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->paragraph(5),
        'ratings' => $faker->numberBetween(1, 5),
        'user_id' => $faker->numberBetween(1, 10),
    ];
});
