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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('id_proyecto');
            $table->string('pro_nproyecto');
            $table->date('pro_fcinicio');
            $table->date('pro_fctermino');
            $table->string('pro_nresponsable');
            $table->string('pro_eresponsable');
            $table->string('pro_fonoresponsable');
            $table->string('pro_rubro');
            $table->string('pro_subrubro');
            $table->text('pro_descripcion');
            $table->integer('pro_estado');
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
        Schema::dropIfExists('proyectos');
    }
};
