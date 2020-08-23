<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('counrties');
            $table->unsignedBigInteger('category_id');
            $table->string('city');
            $table->string('address');
            $table->foreign('category_id')->references('id')->on('ctegories');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            /*$table->unsignedBigInteger('Agency_id');
            $table->foreign('Agency_id')->references('id')->on('agencies')->nullable();*/
            $table->enum('status',['rent','buy']);
            $table->double('price');
            $table->integer('size');
            $table->integer('Room_num');
            $table->integer('bathRoom_num');
            $table->string('title');
            $table->text('desc');
            $table->boolean('is_feature')->default(0);
            $table->string('main_img');
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
        Schema::dropIfExists('properties');
    }
}
