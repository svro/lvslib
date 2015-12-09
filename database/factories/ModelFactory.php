<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Eduweb2\lvslib\Leerling;
use Eduweb2\lvslib\Klas;

$factory->define(Klas::class, function (Faker\Generator $faker) {
    return [
        'naam' => rand(1,6).str_random(4)
    ];
});


$factory->define(Leerling::class, function (Faker\Generator $faker) {
    return [
        'inschrijvingsnummer' => "15" . sprintf('%05d',rand(1,1000)),
        'voornaam' => $faker->firstName,
        'achternaam' => $faker->lastName,
        'geslacht' => substr("MV",rand(0,1),1),
        'klas_id' => Klas::find(rand(1,Klas::count()))->id
    ];
});

