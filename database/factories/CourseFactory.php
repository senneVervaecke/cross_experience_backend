<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'level' => $faker->randomElement(['OCC60', 'OCC80', 'OCC90', 'OCC100',
            'Aspiranten', 'Beginnelingen', 'Licht', 'Midden', 'Zwaar',
            'CCI*S', 'CCI**S', 'CCI***S', 'CCI****S', 'CCI*****S',
            'CCI*L', 'CCI**L', 'CCI***L', 'CCI****L', 'CCI*****L']),

        'speed' => round($faker->numberBetween(400, 570), -1),
        'distance' => $faker->numberBetween(2500, 5500)

    ];
});
