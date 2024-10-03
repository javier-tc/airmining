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
        Schema::create('csinopticos', function (Blueprint $table) {

            $table->increments('id_sin');
            $table->date('sin_fecha');
            $table->integer('sin_id_proyecto'); 
            $table->integer('sin_cma1');
            $table->integer('sin_cma2');
            $table->integer('sin_cma3');
            $table->integer('sin_cma4');
            $table->integer('sin_cma5');
            $table->integer('sin_cma6');
            $table->integer('sin_prob1');
            $table->integer('sin_prob2');
            $table->integer('sin_prob3');
            $table->integer('sin_prob4');
            $table->integer('sin_prob5');
            $table->integer('sin_prob6');
            $table->integer('sin_estado')->default(1);
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
        Schema::dropIfExists('csinopticos');
    }
};
