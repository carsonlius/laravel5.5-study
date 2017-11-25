<?php

use Faker\Generator as Faker;

$factory->define(App\hobby::class, function (Faker $faker) {
    return [
       'user_id' => mt_rand(1,3),
	'hobby' => $faker->word
    ];
});
