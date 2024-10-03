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
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id_registro');
            $table->integer('serie_modelo');
            $table->dateTime('fc_creacion');
            $table->integer('tipo_modelo');
            $table->integer('tipo_dato');
            $table->double('dato');
            $table->string('range');
            $table->integer('alerta');
            $table->integer('id_estacion'); 
           // $table->integer('neu_estacion')->unsigned()->nullable(); 
            //$table->foreign('neu_estacion')->references('id_estacion')->on('estaciones');
            $table->integer('id_user');
            $table->integer('estado');
            $table->timestamps();
        });
    }






    public function down()
    {
        Schema::dropIfExists('registros');
    }
};
