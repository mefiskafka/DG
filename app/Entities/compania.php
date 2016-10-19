<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class compania extends Model
{
    //
    protected $table = "companias";
    protected $fillable = ['id','compania'];


    function compania(){
        return $this->hasOne('SystemDirectory\directorio');
    }


}
