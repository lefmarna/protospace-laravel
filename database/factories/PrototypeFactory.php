<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Prototype;
use Faker\Generator as Faker;

$factory->define(Prototype::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(10),
        'catch_copy' => $faker->realText(50),
        'concept' => $faker->realText(85),
        'user_id' => $faker->numberBetween($min = 1, $max = 2),
    ];
});
