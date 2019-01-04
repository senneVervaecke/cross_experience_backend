<?php

use Faker\Generator as Faker;

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'country' => $faker->country,
        'city' => $faker->city,
        'zipcode' => $faker->postcode,
        'street' => $faker->streetName,
        'number' => $faker->numberBetween(1, 999)
    ];
});
