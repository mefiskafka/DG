<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    //
    protected $table = "departamentos";

    protected $fillable = ["claveDepartamento","departamento", "estructuragerencia_id"];
    protected $guarded =  ['id'];



    function departamento(){
        return $this->hasOne('App\departamento');
    }


}
