<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    //
    protected $table = "departamentos";

    protected $fillable = ["claveDepartamento","departamento", "estructuragerencia_id"];
    protected $guarded =  ['id'];



    function estructuragerencia(){
        return $this->hasOne('SystemDirectory\Entities\estructuragerencia');
    }


}
