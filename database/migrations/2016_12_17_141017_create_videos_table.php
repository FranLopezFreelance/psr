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
            $table->integer('section_id');
            $table->integer('type');
            $table->string('url');
            $table->string('title');
            $table->string('html_title');
            $table->text('description');
            $table->text('text');
            $table->string('link');
            $table->string('img_url');
            $table->date('date');
            $table->integer('views');
            $table->string('dest');
            $table->integer('active');
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
