<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class tipoguardia extends Model
{

    protected $table = 'tipoguardias';
    protected $fillable = ['tipoguardia'];
    protected $guarded = ['id'];

//    function guardia_programa(){
//        return $this->hasMany(guardia_programa::class, 'guardia_programa_id');
//    }

    function tTipoGuardia(){
        return $this->belongsToMany(directorio::class, 'guardia_programas')->withPivot('comentario', 'directorio_id');
    }

    function PersonalGuardia(){
        return $this->belongsToMany(directorio::class, 'guardia_programas')->withPivot('comentario', 'directorio_id', 'tipoguardia_id');
    }


    function Guardia(){
        return $this->belongsToMany(guardiabyear::class, 'guardia_programas')->withPivot('Comentario', 'guardiabyear_id');
    }


}
