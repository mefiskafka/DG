<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guardia_programa extends Model
{
    protected $table = 'guardia_programas';
    protected $fillable = ['programaGuardia', 'Comentario'];
    protected $guarded = ['id'];

//    function diretorio(){
//        return $this->has('App\diretorio');
//    }

    function rolguardia(){
        return $this->belongsTo('App\rolGuardia');
    }

}
