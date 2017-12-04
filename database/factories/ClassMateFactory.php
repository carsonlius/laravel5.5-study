<?php

use Faker\Generator as Faker;

$factory->define(App\ClassMate::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class)->create()->id,
        'student_id' => mt_rand(1,100),
        'student_name' => $faker->userName,

    ];
});
