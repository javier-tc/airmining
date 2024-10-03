<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticos', function (Blueprint $table) {
            $table->increments('id_estadistico');
            $table->integer('esta_id_modelo');
            $table->dateTime('esta_fc_creacion');
            $table->double('esta_datoso2');
            $table->string('esta_rangeso2');
            $table->double('esta_datopm10');
            $table->string('esta_rangepm10');
            $table->integer('esta_estacion')->unsigned()->nullable(); 
            $table->foreign('esta_estacion')->references('id_estacion')->on('estaciones');
            $table->integer('esta_estado');
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
        Schema::dropIfExists('estadisticos');
    }
};
