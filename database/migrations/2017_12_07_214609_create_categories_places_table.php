<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_places', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('categories_places', function ($table){
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('place_id')->references('id')->on('places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_places');
        $table->dropForeign('categories_places_category_id_foreign');
        $table->dropForeign('categories_places_place_id_foreign');
    }
}
