<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Modul;
use Faker\Generator as Faker;

$factory->define(Modul::class, function (Faker $faker) {
    return [
        'name' => 'Modulo '.$faker->numberBetween($min = 1, $max = 5),
        'recibo' => $faker->boolean($chanceOfGettingTrue = 50),
        'solicitud' => $faker->dateTime($max = 'now', $timezone = null), // DateTime('2008-04-25 08:37:17', 'UTC')
        'memorandum' => $faker->dateTime($max = 'now', $timezone = null), // DateTime('2008-04-25 08:37:17', 'UTC')
        'informe' => $faker->numberBetween($min = 150, $max= 300),
        'proyecto' => $faker->boolean($chanceOfGettingTrue = 50),
        'asesor' => $faker->name,
        'f_supervision' => $faker->boolean($chanceOfGettingTrue = 50),
        'f_evaluacion' => $faker->dateTime($max = 'now', $timezone = null), 
    ];
});
