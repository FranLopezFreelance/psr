<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('index_view');
            $table->string('back_index_view');
            $table->string('show_view');
            $table->string('back_show_view');
            $table->integer('dynamic');
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
        Schema::dropIfExists('typeviews');
    }
}
