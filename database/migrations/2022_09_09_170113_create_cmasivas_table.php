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
        Schema::create('cmasivas', function (Blueprint $table) {
            $table->increments('id_cmasiva');
            $table->integer('cma_id_modelo');
            $table->dateTime('cma_fc_creacion');
            $table->double('cma_datoso2');
            $table->double('cma_datopm10');
            $table->integer('cma_estacion')->unsigned()->nullable(); 
            $table->foreign('cma_estacion')->references('id_estacion')->on('estaciones');
            $table->integer('cma_estado');
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
        Schema::dropIfExists('cmasivas');
    }
};
