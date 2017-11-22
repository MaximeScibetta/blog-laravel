<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Blog\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Blog\User::create([
            'name' => 'Maxime',
            'email' => 'maxime.scibetta@outlook.com',
            'password' => Hash::make('secret'),
        ]);
        
    }
}
