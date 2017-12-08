<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('direccion');
            $table->integer('tel');
            $table->string('description');
            $table->string('logo');
            $table->smallInteger('restaurant')->unsigned()->default('0');
            $table->smallInteger('comercio')->unsigned()->default('0');
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
        Schema::dropIfExists('locals');
    }
}
