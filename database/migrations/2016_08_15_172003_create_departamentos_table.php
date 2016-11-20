<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{

    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('claveDepartamento', false, false)->length(10);
            $table->string('departamento', 50);
            $table->integer('estructuragerencia_id')->unsigned();
            $table->foreign('estructuragerencia_id')->references('id')->on('estructuragerencias')->onDelete('cascade');
//            $table->foreign('diretorio_id')->references('id')->on('directorios');
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
        Schema::drop('departamentos');
    }
}
