<?php

use Faker\Generator as Faker;

$factory->define(App\FileName::class, function (Faker $faker) {
    return [
        'file_name' => $faker->mimeType
    ];
});
