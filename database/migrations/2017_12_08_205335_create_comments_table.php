<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment', 255);
            $table->integer('user_id')->unsigned()->index();
            $table->integer('place_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('comments', function($table){
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('comments');
        $table->dropForeign('comments_user_id_foreign');
        $table->dropForeign('comments_place_id_foreign');
    }
}
