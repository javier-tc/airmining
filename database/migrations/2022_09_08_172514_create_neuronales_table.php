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
        Schema::create('neuronales', function (Blueprint $table) {
            $table->increments('id_neuronal');
            $table->integer('neu_id_modelo');
            $table->dateTime('neu_fc_creacion');
            $table->double('neu_datoso2');
            $table->string('neu_rangeso2');
            $table->integer('neu_alertso2');
            $table->double('neu_datopm10');
            $table->string('neu_rangepm10');
            $table->integer('neu_alertpm10');
            $table->integer('neu_estacion'); 
           // $table->integer('neu_estacion')->unsigned()->nullable(); 
            //$table->foreign('neu_estacion')->references('id_estacion')->on('estaciones');
            $table->integer('neu_estado');
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
        Schema::dropIfExists('neuronales');
    }
};
