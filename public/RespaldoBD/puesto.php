<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puesto extends Model
{
    //
    protected $table = "puestos";


    function puesto(){
        return $this->hasOne('App\puesto');
    }


}
