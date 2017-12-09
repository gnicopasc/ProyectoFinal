<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users')->select('id')->take(1)->get();

        $places = DB::table('places')->select('id')->take(1)->get();

        Comment::create([
          'comment'=>'Buena atención. Medio flojo el morfi. Le falta fuerza.',
          'user_id'=>$users->first()->id,
          'place_id'=>$places->first()->id,
      ]);
    }
}
