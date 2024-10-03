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
        Schema::create('numericos', function (Blueprint $table) {
            $table->increments('id_numerico');
            $table->integer('num_id_modelo');
            $table->dateTime('num_fc_creacion');
            $table->double('num_datoso2');
            $table->string('num_rangeso2');
            $table->double('num_datopm10');
            $table->string('num_rangepm10');
            $table->double('num_datows');
            $table->string('num_rangews');
            $table->double('num_datowd');
            $table->integer('num_estacion')->unsigned()->nullable(); 
            $table->foreign('num_estacion')->references('id_estacion')->on('estaciones');
            $table->integer('num_estado');
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
        Schema::dropIfExists('numericos');
    }
};
