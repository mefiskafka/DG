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

    function dRoles(){
        return $this->belongsToMany(rolGuardia::class, 'guardia_programas')->withPivot('Comentario', 'tipoguardia_id');
    }

    function dTipoGuardia(){
        return $this->belongsToMany(tipoguardia::class, 'guardia_programas')->withPivot('Comentario', 'rolguardia_id');
    }

    function dGuardia(){
        return $this->belongsToMany(guardiabyear::class, 'guardia_programas')->withPivot('Comentario', 'guardiabyear_id');
    }

//    public function rolesporPersona(){
//        return $this->hasManyThrough(rolGuardia::class, 'guardia_programa', 'directorio_id', 'guardia_programas_id');
//    }

}
