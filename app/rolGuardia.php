<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rolguardia extends Model
{
    protected $table = 'rolguardias';
    protected $fillable = ['rolGuardia'];
    protected $guarded = ['id'];

    function guardiaprograma(){
        return $this->hasOne('App\guardiaPrograma');
    }
}
