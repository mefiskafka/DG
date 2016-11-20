<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class guardia_programa extends Model
{
    protected $table = 'guardia_programas';
    protected $fillable = ['programaGuardia', 'Comentario', 'directorio_id', 'rolguardia_id', 'tipoguardia_id'];
    protected $guarded = ['id'];

    function directorio(){
        return $this->belongsTo('SystemDirectory\Entities\directorio');
//        return $this->hasOne('SystemDirectory\Entities\directorio');
    }
    function rolguardia(){
        return $this->belongsTo('SystemDirectory\Entitites\rolGuardia');
    }
    function tipoguardia(){
        return $this->belongsTo('SystemDirectory\Entitites\tipoguardia');
    }

}
