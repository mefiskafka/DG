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
    function TipoGuardia(){
        return $this->belongsToMany(directorio::class, 'guardia_programas', 'directorio_id');
    }
}
