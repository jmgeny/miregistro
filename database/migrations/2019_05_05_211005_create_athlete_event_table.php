<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthleteEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athlete_event', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('athlete_id');
            $table->unsignedInteger('event_id');

            $table->timestamps();

            $table->foreign('athlete_id')->references('id')->on('athletes');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('athlete_event');
    }
}
