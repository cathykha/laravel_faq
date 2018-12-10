<?php

use Faker\Generator as Faker;

$factory->define(App\Dislike::class, function (Faker $faker) {
    return [
        'user_id'=> $faker->randomDigitNotNull,

    ];
});
