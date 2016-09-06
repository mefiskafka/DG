<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compania extends Model
{
    //
    protected $table = "companias";
    protected $fillable = ['id','compania'];


    function compania(){
        return $this->hasOne('App\directorio');
    }


}
