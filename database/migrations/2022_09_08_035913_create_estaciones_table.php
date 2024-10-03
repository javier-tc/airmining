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
        Schema::create('estaciones', function (Blueprint $table) {
            $table->increments('id_estacion');
            $table->integer('est_id_proyecto');
            $table->string('est_nombre');
            $table->string('est_latitud');
            $table->string('est_longitud');
            $table->integer('est_tipo');
            $table->integer('est_visible');
            $table->integer('est_estado');
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
        Schema::dropIfExists('estaciones');
    }
};
