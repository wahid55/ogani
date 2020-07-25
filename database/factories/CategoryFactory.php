<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->colorName;
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'description' => $faker->paragraph(3),
        'parent_id' => null,
        'featured' => $faker->numberBetween(0, 1),
        'menu' => $faker->numberBetween(0, 1),
        'image' => $faker->imageUrl('200', '100'),
    ];
});
