<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiaprogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardiaprogramas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('programaGuardia');
            $table->string('Comentario',255)->nullable();
            $table->integer('diretorio_id')->unsigned();
            $table->foreign('diretorio_id')->references('id')->on('diretorios');
            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rolguardias');
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
        Schema::drop('guardiaprogramas');
    }
}
