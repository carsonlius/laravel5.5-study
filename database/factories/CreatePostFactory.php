<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'hobby' => $faker->word,
	'user_id' => mt_rand(1,3)
    ];
});
