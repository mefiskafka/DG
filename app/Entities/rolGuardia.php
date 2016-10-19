<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class rolguardia extends Model
{
    protected $table = 'rolguardias';
    protected $fillable = ['rolGuardia'];
    protected $guarded = ['id'];

    function guardiaprograma(){
        return $this->hasOne('SystemDirectory\guardiaPrograma');
    }
}
