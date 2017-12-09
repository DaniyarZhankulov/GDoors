<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doors', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->integer('price');
            $table->string('material');
            $table->integer('height');
            $table->integer('width');
            $table->string('description');
            $table->string('image_link1');
            $table->string('image_link2');
            $table->string('image_link3');
            $table->string('image_link4');
            $table->string('image_link5');
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
        Schema::dropIfExists('doors');
    }
}
