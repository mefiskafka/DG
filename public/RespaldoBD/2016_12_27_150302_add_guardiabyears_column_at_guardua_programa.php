<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGuardiabyearsColumnAtGuarduaPrograma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('guardia_programas', function (Blueprint $table){

//           $table->integer('guardiabyear_id')->unsigned();
//           $table->foreign('guardiabyear_id')->references('id')->on('guardiabyears');
              $table->dropForeign('guardia_programas_guardiabyear_id');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('guardia_programas', function(Blueprint $table){
//            $table->dropForeign('guardia_programas_id');
//        });
    }
}
