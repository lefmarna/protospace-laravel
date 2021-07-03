<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->realText(30),
        'user_id' => $faker->numberBetween($min = 1, $max = 4),
        'prototype_id' => $faker->numberBetween($min = 1, $max = 200),
    ];
});
