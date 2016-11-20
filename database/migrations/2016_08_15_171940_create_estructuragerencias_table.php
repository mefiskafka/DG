<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstructuragerenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estructuragerencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('claveCentroTrabajo', false, false)->length(15);
            $table->string('abreviatura', 250);
            $table->string('gerencia', 250);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('estructuragerencias');
    }
}
