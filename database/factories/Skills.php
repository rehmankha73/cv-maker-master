<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Skills;
use Faker\Generator as Faker;

$factory->define(Skills::class, function (Faker $faker) {
    return [
        'skills'=>$faker->name,
        'skills_level'=>$faker->phoneNumber
    ];
});
