<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attribute;
use Faker\Generator as Faker;

$factory->define(Attribute::class, function (Faker $faker) {
    return [
        'code' => $faker->numerify("attr-###"),
        'name' => $faker->colorName,
        'frontend_type' => $faker->randomElement(['image', 'media_image', 'gallery', 'boolean', 'weight', 'price', 'multiline', 'multi_select', 'select', 'multiple']),
        'is_filterable' => $faker->numberBetween(0, 1),
        'is_required' => $faker->numberBetween(0, 1),
    ];
});
