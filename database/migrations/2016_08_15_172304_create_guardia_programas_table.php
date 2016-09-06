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
            $table->integer('directorio_id')->unsigned();
            $table->foreign('directorio_id')->references('id')->on('directorios');
            $table->integer('rolguardia_id')->unsigned();
            $table->foreign('rolguardia_id')->references('id')->on('rolguardias');
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
