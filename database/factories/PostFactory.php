<?php

use Faker\Generator as Faker;
use Blog\User;
use Blog\Post;

$factory->define(Post::class, function (Faker $faker) {
    return[
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'preamble' => $faker->text($maxNbChars = 100),
        'body' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'user_id' => User::whereEmail('maxime.scibetta@outlook.com')->first()->id,
    ];
});