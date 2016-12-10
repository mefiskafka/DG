<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class rolguardia extends Model
{
    protected $table = 'rolguardias';
    protected $fillable = ['rolGuardia'];
    protected $guarded = ['id'];

//    function guardia_programa(){
//        return $this->hasMany(guardia_programa::class, 'guardia_programa_id');
//    }
    function PersonalGuardia(){
        return $this->belongsToMany(directorio::class, 'guardia_programas', 'directorio_id');
    }

}
