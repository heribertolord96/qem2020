<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'calle' 		=> $faker->cityPrefix ,
       'numero_interior' 	=> $faker->buildingNumber,
        'numero_exterior' 	=> $faker->secondaryAddress,
        'city' 			=> $title,
        'state' 			=> $faker->state ,
        'Country' 		=> $faker->country,
        'latitud' 			=> $faker->latitude($min = -90, $max = 90) ,
        'longitud' 			=> $faker->longitude($min = -180, $max = 180),
        
    ];
});
