<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('local_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('local_id')->references('id')->on('local');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locals_categories');
    }
}
