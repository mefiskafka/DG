<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiretoriosTable extends Migration
{
    public function up()
    {


        Schema::create('diretorios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('Ficha', false, false)->length(10);
            $table->string('nombre', 50);
            $table->string('apeidoPaterno', 50);
            $table->string('apeidoMaterno', 50)->nullable();
            $table->string('emailTrabajo', 50);
            $table->string('emailPersonal', 50);
            $table->date('cumpleaños',25)->nullable();
            $table->string('nivel',8)->nullable();
            $table->string('numExt',20)->nullable();
            $table->string('numCelular', 20)->nullable();
            $table->string('numCasa',20)->nullable();
            $table->integer('estructuragerencia_id')->unsigned();
            $table->foreign('estructuragerencia_id')->references('id')->on('estructuragerencias');
            $table->integer('puesto_id')->unsigned();
            $table->foreign('puesto_id')->references('id')->on('puestos');
            $table->integer('compania_id')->unsigned();
            $table->foreign('compania_id')->references('id')->on('companias');
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
        Schema::drop('diretorios');
    }
}
