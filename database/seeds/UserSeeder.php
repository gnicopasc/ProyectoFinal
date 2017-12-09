<?php

use App\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::create([
            'user'=>'Luke Skywalker',
            'email'=>'luke@gmail.com',
            'password'=>bcrypt('laravel'),
            'location'=>'Tatooine',
            'is_admin'=>true,
        ]);

        User::create([
            'user'=>'Obi Wan',
            'email'=>'obi@gmail.com',
            'password'=>bcrypt('laravel'),
            'location'=>'Tatooine',
            'is_admin'=>false,
        ]);
    }
}
