<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class guardia_programa extends Model
{
    protected $table = 'guardia_programas';
    protected $fillable = ['programaGuardia', 'Comentario'];
    protected $guarded = ['id'];

//    function diretorio(){
//        return $this->has('SystemDirectory\diretorio');
//    }

    function rolguardia(){
        return $this->belongsTo('SystemDirectory\rolGuardia');
    }

}
