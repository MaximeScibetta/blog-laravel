<?php

use Illuminate\Database\Seeder;
use Blog\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Premier post',
            'preamble' => '',
            'body' => 'Le body de mon premier post',
        ]);
    }
}
