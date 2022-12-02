<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Venue;
use Faker\Generator as Faker;

$factory->define(Venue::class, function (Faker $faker) {
    $venue = ['bazak', 'Pakalz', 'Mcdo', 'Bohol tropics'];
    return [
        'address'=>$this->faker->address(),
        'name'=>$this->faker->randomElement($venue,1),
        'capacity'=>$this->faker->randomDigit(),
        'price'=>$this->faker->randomDigit()
    ];
});
