<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('favIcon');
            $table->string('city');
            $table->string('address');
            $table->string('phone');
            $table->string('works_hour');
            $table->string('email');
            $table->text('map');
            $table->string('fb');
            $table->string('tiwitter');
            $table->string('insta');
            $table->string('Skype');
            $table->string('prinst');
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
        Schema::dropIfExists('settings');
    }
}
