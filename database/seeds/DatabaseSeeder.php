<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PlaceSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
