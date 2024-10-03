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

        Schema::create('users_proyectos', function (Blueprint $table) {
            $table->increments('id_up');
            $table->integer('user_id')->unsigned();
            $table->integer('rolep_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
            $table->integer('up_estado')->default(1);
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
        Schema::dropIfExists('users_proyectos');
    }
};
