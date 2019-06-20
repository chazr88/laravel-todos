<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),//This makes faker create a name that is a sentence of 3 words
        'description' => $faker->paragraph(4),
        'completed' => false
    ];
});
