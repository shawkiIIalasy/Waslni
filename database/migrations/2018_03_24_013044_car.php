<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Car extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
         
         $table->increments('id');
            $table->string('car');
            $table->integer('car_model');
            $table->integer('car_num')->unique();
            $table->integer('seat_num');
            $table->integer('user_id');
            $table->rememberToken();
            $table->timestamps();
             });
         DB::table('cars')->insert(array('car'=>'Waslni', 'car_model'=>'000000','car_num'=>'000000','seat_num'=>'00000','user_id'=>'0'));
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
              Schema::dropIfExists('cars');

    }
}
