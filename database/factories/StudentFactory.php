<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use App\Promotion;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {

    $gender = $faker->randomElement(['male', 'female']);

    return [
        'name' => $faker->name($gender),
        'email' => $faker->unique()->safeEmail,
        'genero' => $gender,
        'promotion_id' => function () {
            return factory(\App\Promotion::class)->create()->id;
        },
    ];
});
