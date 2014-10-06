<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTvSlotTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_slot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('air_time');
            $table->string('title');
            $table->integer('tv_station_id')->unsigned();
            $table->foreign('tv_station_id')->references('id')->on('tv_station');
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
        Schema::drop('tv_slot');

    }

}
