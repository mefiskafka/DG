<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoriosTable extends Migration
{
    public function up()
    {
        Schema::create('directorios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('Ficha', false, false)->length(10);
            $table->string('nombre', 50);
            $table->string('apeidoPaterno', 50);
            $table->string('apeidoMaterno', 50)->nullable();
            $table->string('emailTrabajo', 50);
            $table->string('emailPersonal', 50)->nullable();
            $table->date('cumpleaños',25)->nullable();
            $table->string('nivel',8)->nullable();
            $table->string('numExt',20)->nullable();
            $table->string('numCelular', 20)->nullable();
            $table->string('numCasa',20)->nullable();
            $table->integer('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->integer('puesto_id')->unsigned();
            $table->foreign('puesto_id')->references('id')->on('puestos');
            $table->integer('compania_id')->unsigned();
            $table->foreign('compania_id')->references('id')->on('companias');
            $table->string('privado', 1)->default(0);
            $table->string('ordenguardia')->default(0);
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
        Schema::drop('directorios');
    }
}
