<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class rolguardia extends Model
{
    protected $table = 'rolguardias';
    protected $fillable = ['rolGuardia'];
    protected $guarded = ['id'];

    function guardias_programas(){
        return $this->hasMany('SystemDirectory\Entitites\guardia_programa');
    }
}
