<?php

use App\Place;
use App\User;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Place::create ([
            'name'=>'La Fuerza Vegana',
            'address'=>'Cuadrante 5G',
            'description'=>'Los mejores platos veganos de la galaxia',
            'restaurant'=>true,
            'comercio'=>true,
            'user_id'=>User::where('user', 'Luke Skywalker')->value('id')
        ]);
    }
}
