<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSolicitud extends Model
{
    protected $table = 'TipoSolicituds';

    public function solicituds()
    {
        return $this->hasMany('App\Solicitud', 'tipoSolicitudId');
    }
}
