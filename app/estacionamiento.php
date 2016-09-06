<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estacionamiento extends Model
{
    protected $table = 'estacionamientos';
    protected $fillable = ['nombre','descripcion'];
    protected $guarded =  ['id'];



    function paseVehicular(){
        return $this->hasOne('App\paseVehicular','');
    }
}
