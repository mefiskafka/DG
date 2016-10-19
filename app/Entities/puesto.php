<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class puesto extends Model
{
    //
    protected $table = "puestos";


    function puesto(){
        return $this->hasOne('SystemDirectory\puesto');
    }


}
