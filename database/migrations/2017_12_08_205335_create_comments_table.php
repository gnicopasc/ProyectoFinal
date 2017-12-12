<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment', 255);
            $table->smallInteger('user_id')->unsigned()->index();
            $table->smallInteger('place_id')->unsigned()->index();
            $table->timestamps();
        });

    }
    public function down()
    {
        Schema::dropIfExists('comments');

    }
}
