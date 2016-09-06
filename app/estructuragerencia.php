<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estructuragerencia extends Model
{
    //
    protected $table = "estructuragerencias";

    function estructuragerencia(){
        return $this->hasOne('App\estructuragerencia');
    }

    function departamento(){
        return $this->belongsTo('App\departamento');
    }



}
