<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiaProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardia_programas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Comentario',255)->nullable();
            $table->integer('directorio_id')->unsigned();
            $table->foreign('directorio_id')->references('id')->on('directorios');
            $table->integer('rolguardia_id')->unsigned();
            $table->foreign('rolguardia_id')->references('id')->on('rolguardias');
            $table->integer('tipoguardia_id')->unsigned();
            $table->foreign('tipoguardia_id')->references('id')->on('tipoguardias');
            $table->integer('guardiabyear_id')->unsigned();
            $table->foreign('guardiabyear_id')->references('id')->on('guardiabyears');
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
        Schema::drop('guardia_programas');
    }
}
