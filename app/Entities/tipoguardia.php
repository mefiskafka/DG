<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class tipoguardia extends Model
{

    protected $table = 'tipoguardia';
    protected $fillable = ['tipoguardia'];
    protected $guarded = ['id'];

    function guardias_programas(){
        return $this->hasMany('SystemDirectory\Entities\guardia_programa');
    }
}
