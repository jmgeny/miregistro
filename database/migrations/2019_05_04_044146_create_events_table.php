<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('organizer_id');
            $table->unsignedInteger('sport_id');// Deporte 
            $table->unsignedInteger('specification_id');// Distancia
            $table->unsignedInteger('city_id');

            $table->string('name');// ## Portada
            $table->date('date');// ## Portada

            $table->text('description')->nullable();// ## Evento 
            $table->text('cronograma')->nullable();// ## Evento

            $table->string('direccion')->nullable();// Local Info
            $table->string('contacto')->nullable();// Contacto

            $table->date('cierre');

            $table->timestamps();
            
            $table->foreign('organizer_id')->references('id')->on('organizers');
            $table->foreign('sport_id')->references('id')->on('sports');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('specification_id')->references('id')->on('specifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
