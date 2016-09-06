<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReprogramacionVacacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reprogramacion_vacaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaReprogramadaInicio')->nullable();
            $table->date('fechaReprogramadaFin')->nullable();
            $table->integer('vacasion_id')->unsigned();
            $table->foreign('vacasion_id')->references('id')->on('vacasions');

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
        Schema::drop('reprogramacion_vacaciones');
    }
}
