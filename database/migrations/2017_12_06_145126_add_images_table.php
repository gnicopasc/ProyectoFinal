<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesTable extends Migration
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
          $table->string('name');

          $table->integer('categories_id')->unsigned();
          $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');

          $table->integer('local_id')->unsigned();
          $table->foreign('local_id')->references('id')->on('local')->onDelete('cascade');

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
        Schema::dropIfExists('images');
    }
}
