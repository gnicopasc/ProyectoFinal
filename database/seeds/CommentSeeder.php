<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\User;
use App\Place;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Comment::create([
          'comment'=>'Buena atención. Medio flojo el morfi. Le falta fuerza.',
          'user_id'=>User::where('user', 'Obi Wan')->value('id'),
          'place_id'=>Place::where('name', 'La Fuerza Vegana')->value('id')
      ]);
    }
}
