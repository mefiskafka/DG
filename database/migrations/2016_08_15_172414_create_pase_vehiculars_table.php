<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaseVehicularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pase_vehiculars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numPase',15)->nullable();

            $table->integer('directorio_id')->unsigned();
            $table->foreign('directorio_id')->references('id')->on('directorios');

            $table->integer('estacionamiento_id')->unsigned();
            $table->foreign('estacionamiento_id')->references('id')->on('estacionamientos');

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
        Schema::drop('pase_vehiculars');
    }
}
