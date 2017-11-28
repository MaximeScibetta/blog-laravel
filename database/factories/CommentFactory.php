<?php
use Faker\Generator as Faker;
use Blog\User;
use Blog\Comment;
use Blog\Post;

$factory->define(Comment::class, function (Faker $faker) {
    $users_ids = User::all()->pluck('id');
    $posts_ids = Post::all()->pluck('id');

    return [
        'content' => $faker->text($maxNbChars = 100),
        'user_id' => $users_ids->random(),
        'post_id' => $posts_ids->random(),
    ];
});