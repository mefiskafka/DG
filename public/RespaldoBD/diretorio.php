<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diretorio extends Model
{
    //
    protected $table = 'diretorios';
    protected $fillable = ['Ficha','nombre', 'apeidoPaterno', 'apeidoMaterno',
                           'emailTrabajo', 'emailPersonal', 'cumpleaños', 'nivel',
                           'numExt', 'numCelular', 'numCasa',
                            'estructuragerencia_id', 'puesto_id', 'compania_id'];
    protected $guarded =  ['id'];

    function compania(){
        return $this->belongsTo('App\compania');
    }

    function puesto(){
        return $this->belongsTo('App\puesto');
    }

    function estructuragerencia(){
        return $this->belongsTo('App\estructuragerencia');
    }

//    function diretorio(){
//        return $this->belongsTo('App\diretorio');
//    }



}
