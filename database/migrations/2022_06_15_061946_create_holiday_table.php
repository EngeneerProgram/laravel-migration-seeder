<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * ##descrizione parametri
     * - destinazione
     * 
     * - hotel
     * - promozione hotel
     * - assicurazione
     * - img
     * - intrattenimento
     * -descrizione
     * - costo
     * -
     * 
     */
    public function up()
    {
        Schema::create('holiday', function (Blueprint $table) {
            $table->id();
            $table->string('destinazione', 100);
            $table->string('hotel', 100);
            $table->string('promozione', 100);
            $table->string('assicurazione',20);
            $table->string('img', 250);
            $table->text('intrattenimento');
            $table->text('descrizione');
            $table->string('prezzo',50);
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
        Schema::dropIfExists('holiday');
    }
}
