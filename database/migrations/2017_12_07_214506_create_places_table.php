<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250);
            $table->string('location')->nullable(); /*select de provincias*/
            $table->string('address');
            $table->integer('tel')->nullable();
            $table->string('description');
            $table->string('logo')->default('empty'/*poner ruta de imagen por default*/);
            $table->boolean('restaurant')->unsigned()->default(true);
            $table->boolean('comercio')->unsigned()->default(false);
            $table->smallInteger('user_id')->unsigned()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
