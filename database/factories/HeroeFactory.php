<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Heroe;
use Faker\Generator as Faker;

$factory->define(Heroe::class, function (Faker $faker) {
  $nombreImagen = 'img/'.$faker->randomElement
  (['joker','kang','loki','magneto','doctor_muerte','darth_vader','ultron']).'.gif';
    return[
        'nombre' => $faker->name,
        'titulo' => $faker->paragraph(1),
        'descripcion' => $faker->paragraph(2),
        'imagen' => $nombreImagen,
    ];
});
