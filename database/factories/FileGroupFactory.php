<?php

use Faker\Generator as Faker;

$factory->define(App\FileGroup::class, function (Faker $faker) {
    return [
        'data_type' => $faker->randomElement(['VIDEO', '360VIDEO', 'IMAGE', 'SLIDESHOW', 'PDF'])
    ];
});
