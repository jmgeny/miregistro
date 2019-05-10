<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('events', function (Blueprint $table) {
        //     $table->unsignedBigInteger('organizer_id');

        //     $table->foreign('organizer_id')->references('id')->on('organizers');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $table->dropForeign('events_organizer_id_foreign');
    }
}
