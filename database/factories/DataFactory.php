<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Data;
use Faker\Generator as Faker;

$factory->define(Data::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'fathername'=>$faker->name,
        'biography'=>$faker->paragraph,
        'date'=>$faker->dateTime,
        'gender'=>$faker->sentence,
        'martialstatus'=>$faker->sentence,
        'relegion'=>$faker->sentence,
        'nationality'=>$faker->sentence,
        'address'=>$faker->sentence,
        'city'=>$faker->sentence,
        'country'=>$faker->sentence,
        'code'=>$faker->sentence,
        'email'=>$faker->email,
        'number'=>$faker->phoneNumber
        //
    ];
});
