<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class guardia_programa extends Model
{
    protected $table = 'guardia_programas';
    protected $fillable = ['programaGuardia', 'Comentario', 'directorio_id', 'rolguardia_id', 'tipoguardia_id'];
    protected $guarded = ['id'];

//    function directorio(){
//        return $this->belongsTo(directorio::class, 'directorio_id');
//    }
//    function rolguardia(){
//        return $this->belongsTo(rolguardia::class, 'rolguardia_id');
//    }
//    function tipoguardia(){
//        return $this->belongsTo(tipoguardia::class, 'tipoguardia_id');
//    }

}
