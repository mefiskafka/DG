<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class estructuragerencia extends Model
{
    //
    protected $table = "estructuragerencias";


    function departamento(){
        return $this->hasMany('SystemDirectory\Entities\departamento');
    }
}
