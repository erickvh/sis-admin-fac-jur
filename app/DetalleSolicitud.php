<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleSolicitud extends Model
{
    protected $table = 'DetalleSolicituds';

    public function solicitud()
    {
        return $this->belongsTo('App\Solicitud', 'solicitudId');
    }

    public function anexos()
    {
        return $this->hasMany('App\Anexo', 'detalleSolicitudId');
    }

    public function materias(){
        return $this->belongsToMany('App\Materia', 'DetalleSolicitudMateria', 'detalleSolicitudId', 'materiaId');
    }
}
