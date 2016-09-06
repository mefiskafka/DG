<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guardiaprograma extends Model
{
    protected $table = 'guardiaprogramas';
    protected $fillable = ['programaGuardia', 'Comentario'];
    protected $guarded = ['id'];

//    function diretorio(){
//        return $this->has('App\diretorio');
//    }

    function rolguardia(){
        return $this->belongsTo('App\rolGuardia');
    }

}
