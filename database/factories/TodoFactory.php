<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
    	'todo' => $faker->sentence,
    	'completed' => rand(false, true),
    ];
});
