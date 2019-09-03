<?php

use App\Models\Permiso;
use Faker\Generator as Faker;

//Creamos la clase Permiso que podra ser llamada desde un seeds
$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'slug' => $faker->word,
    ];
});
