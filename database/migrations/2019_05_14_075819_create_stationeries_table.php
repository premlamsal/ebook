<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stationeries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('mobile');
            $table->string('proprietor');
            $table->integer('state');
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
        Schema::dropIfExists('stationeries');
    }
}
