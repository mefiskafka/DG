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
        'departamento_id', 'puesto_id', 'compania_id'];
    protected $guarded =  ['id'];

    function departamento(){
        return $this->belongsTo('SystemDirectory\Entities\departamento');
    }
    function compania(){
        return $this->belongsTo('SystemDirectory\Entities\compania');
    }
    function puesto(){
        return $this->belongsTo('SystemDirectory\Entities\puesto');
    }
//    function estructuragerencia(){
//        return $this->belongsTo('SystemDirectory\Entities\estructuragerencia');
//    }
    function paseVehicular(){
        return $this->hasMany('SystemDirectory\Entities\paseVehicular');
    }

//    function guardia_programa(){
//        return $this->hasMany(guardia_programa::class, 'guardia_programa_id');
//    }

    function Roles(){
        return $this->belongsToMany(rolGuardia::class, 'guardia_programas', 'rolguardia_id');
    }

    function TipoGuardia(){
        return $this->belongsToMany(tipoguardia::class, 'guardia_programas', 'tipoguardia_id');
    }

}
