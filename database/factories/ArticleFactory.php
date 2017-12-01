<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
	$intro = $faker->paragraph(1);
	dump($intro);
    return [
        'title' => $faker->word,
        'intro' => substr($intro, 0,100),
        'content' => $faker->text(200)
    ];
});
