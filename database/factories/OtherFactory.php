<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Other;
use Faker\Generator as Faker;

$factory->define(Other::class, function (Faker $faker) {
    return [
        'data_id'=>$faker->numberBetween(0,100),
        'degree'=>$faker->name,
        'insitude'=>$faker->name,
        'session'=>$faker->dateTime,
        'marks'=>$faker->numberBetween(0,100),
        'total'=>'100',
        'company'=>$faker->name,
        'post'=>$faker->name,
        'join_date'=>$faker->dateTime,
        'leave_data'=>$faker->dateTime,
        'skills'=>$faker->name,
        'skills_level'=>$faker->phoneNumber,
        'hobbies'=>$faker->name,
        'references'=>$faker->sentence
    ];
});
