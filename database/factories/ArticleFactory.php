<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
	
    return [
        'title' => $faker->word,
        'intro' => substr($faker->paragraph, 0, 100),
        'content' => $faker->text(200),
        'image' => $faker->imageUrl()
    ];
});
