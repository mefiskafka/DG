<?php

namespace SystemDirectory\Entities;

use Illuminate\Database\Eloquent\Model;

class guardiabyear extends Model
{
    function PersonalGuardia()
    {
        return $this->belongsToMany(directorio::class, 'guardia_programas')->withPivot('Comentario', 'directorio_id', 'tipoguardia_id', 'guardiabyear_id');
    }

    function Roles()
    {
        return $this->belongsToMany(rolGuardia::class, 'guardia_programas')->withPivot('Comentario', 'rolguardia_id', 'guardiabyear_id');
    }

    function TipoGuardia()
    {
        return $this->belongsToMany(tipoguardia::class, 'guardia_programas')->withPivot('Comentario', 'rolguardia_id', 'id', 'guardiabyear_id');
    }


}
