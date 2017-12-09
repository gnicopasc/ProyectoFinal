<?php
use App\Category;
use App\Place;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories_PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories_places')->insert([
            'category_id' = Category::where('food', 'Vegana')->value('id'),
            'place_id'= Place::where('user', 'La Fuerza Vegana')->value('id')

        ]);
        DB::table('categories_places')->insert([
            'category_id' = Category::where('food', 'Vegetariana')->value('id'),
            'place_id'= Place::where('user', 'La Fuerza Vegana')->value('id')
        ]);
    }
}
