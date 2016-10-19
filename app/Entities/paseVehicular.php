<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class paseVehicular extends Model
{
    protected $table = 'pase_vehiculars'; //Igual que el nombre de la Tabla de la BD
    protected $fillable = ['numPase','estacionamiento_id','directorio_id'];
    protected $guarded =  ['id'];

    function directorio(){
        return $this->belongsTo('SystemDirectory\Entities\directorio');
    }
    function estacionamiento(){
        return $this->belongsTo('SystemDirectory\Entities\estacionamiento');
    }



}
