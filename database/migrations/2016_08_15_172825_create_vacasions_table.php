<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacasionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacasions', function (Blueprint $table) {
            $table->increments('id');

            $table->date('fechaInicio')->nullable();
            $table->date('fechaFin')->nullable();
            $table->integer('cicloVacacional_id')->unsigned();
            $table->foreign('cicloVacacional_id')->references('id')->on('ciclo_vacacionals');
            $table->integer('directorio_id')->unsigned();
            $table->foreign('directorio_id')->references('id')->on('directorios');


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
        Schema::drop('vacasions');
    }
}
