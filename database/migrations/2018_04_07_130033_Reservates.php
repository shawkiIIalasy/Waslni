<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservates', function (Blueprint $table) {

            $table->increments('id');
          $table->integer('trip_id');
            $table->integer('user_id');
             $table->string('seat');
            $table->rememberToken();
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
               Schema::dropIfExists('reservates');

    }
}
