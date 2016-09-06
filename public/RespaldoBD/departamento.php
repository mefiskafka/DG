<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    //
    protected $table = "departamentos";

    function departamento(){
        return $this->hasOne('App\departamento');
    }


}
