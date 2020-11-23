<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\AdministrativoM::class, function (Faker $faker) {
    return [
        'NombreAd'=> $faker ->NombreAd,
        'ApellidoPAd'=> $faker ->ApellidoPAd,
        'ApellidoMAd'=> $faker ->ApellidoMAd,
        'TelefonoAd'=> $faker ->TelefonoAd,
        'Puesto'=> $faker ->ApellidoMAd,
        'CorreoAd'=> $faker ->unique()->safeEmail,
    ];


});
