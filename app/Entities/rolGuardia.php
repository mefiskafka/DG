<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class rolguardia extends Model
{
    protected $table = 'rolguardias';
    protected $fillable = ['rolGuardia','Ficha'];
    protected $guarded = ['id'];

//    function guardia_programa(){
//        return $this->hasMany(guardia_programa::class, 'guardia_programa_id');
//    }
    function PersonalGuardia(){
        return $this->belongsToMany(directorio::class, 'guardia_programas')->withPivot('comentario', 'directorio_id', 'tipoguardia_id');
    }



    function Guardia(){
        return $this->belongsToMany(guardiabyear::class, 'guardia_programas')->withPivot('Comentario', 'guardiabyear_id');
    }

}
