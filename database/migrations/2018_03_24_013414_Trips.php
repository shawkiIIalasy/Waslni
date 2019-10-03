<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('trips', function (Blueprint $table) {

         $table->increments('id');
            $table->string('DriverName');
            $table->time('stime');
             $table->date('date');
            $table->string('loc');
            $table->string('loc2');
             $table->string('Smoking');
            $table->integer('user_id');
            $table->timestamp('end_at')->nullable();
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
                Schema::dropIfExists('Trips');
    }
}
