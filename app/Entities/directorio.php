<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;


class directorio extends Model

{
    //
    protected $table = 'directorios';
    protected $fillable = ['Ficha','nombre', 'apeidoPaterno', 'apeidoMaterno',
        'emailTrabajo', 'emailPersonal', 'cumpleaños', 'nivel',
        'numExt', 'numCelular', 'numCasa',
        'estructuragerencia_id', 'puesto_id', 'compania_id'];
    protected $guarded =  ['id'];

    function compania(){
        return $this->belongsTo('SystemDirectory\Entities\compania');
    }

    function puesto(){
        return $this->belongsTo('SystemDirectory\Entities\puesto');
    }

    function estructuragerencia(){
        return $this->belongsTo('SystemDirectory\Entities\estructuragerencia');
    }

    function paseVehicular(){
        return $this->hasMany('SystemDirectory\Entities\paseVehicular');
    }



}
