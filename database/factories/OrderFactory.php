<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'order_number' => $faker->numerify("Order-###"),
        'user_id' => $faker->numberBetween(1, 15),
        'status' => $faker->randomElement(['Pending', 'Awaiting Payment', 'Awaiting Fulfillment', 'Awaiting Shipment', 'Awaiting Pickup', 'Partially Shipped', 'Completed', 'Shipped', 'Cancelled', 'Declined', 'Refunded', 'Disputed', 'Manual Verification Required', 'Partially Refunded']),
        'grand_total' => $faker->numberBetween(100, 1000),
        'item_count' => $faker->numberBetween(1, 10),
        'is_paid' => $faker->numberBetween(0, 1),
        'payment_method' => $faker->randomElement(['Credit Cards', 'Bank Transfers', 'E wallets', 'Cash']),
        'shipping_fullname' => $faker->name,
        'shipping_address' => $faker->address,
        'shipping_city' => $faker->city,
        'shipping_state' => $faker->state,
        'shipping_zipcode' => $faker->postcode,
        'shipping_phone' => $faker->phoneNumber
    ];
});
