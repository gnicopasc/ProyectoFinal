<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('src');
            $table->integer('place_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('images', function($table){
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
        Schema::dropIfExists('images');
        $table->dropForeign('images_place_id_foreign');
    }
}
