<?php

use Faker\Generator as Faker;

$factory->define(App\Competition::class, function (Faker $faker) {
    $startDate = $faker->dateTimeBetween('now', '2 years');
    $startDate = \Carbon\Carbon::instance($startDate);
    return [
        'name' => $faker->city,
        'start_date' => $startDate,
        'end_date' => $startDate->addDays($faker->numberBetween(0, 7))
    ];
});
