<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('UserName');
            $table->string('email');
            $table->string('password'); 
            $table->boolean('is_Agent')->default(0);
            $table->string('img')->nullable(); 
            $table->string('postion')->nullable(); 
            $table->string('office')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->string('taxNumber')->nullable(); 
            $table->string('faxNumber')->nullable();   
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
        Schema::dropIfExists('users');
    }
}
