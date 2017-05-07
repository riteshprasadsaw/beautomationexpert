<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('course_id');            
            $table->string('title');
            $table->string('type');
            $table->string('access');
            $table->text('details');
            $table->text('description');
            $table->tinyInteger('active');
            $table->tinyInteger('featured');
            $table->integer('duration');
            $table->integer('views');
            $table->string('image');
            $table->text('embed_code');
            $table->string('mp4_url');
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
        Schema::dropIfExists('videos');
    }
}
