<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationLogementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations_logements', function (Blueprint $table) {
            $table->id('id_reservation');

            $table->unsignedBigInteger('demande_id');
            $table->foreign('demande_id')->references('id_demande')->on('demandes_reservations');

           

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
        Schema::dropIfExists('reservations_logements');
    }
}
