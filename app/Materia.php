<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'Materias';

    public function carrera()
    {
        return $this->belongsTo('App\Carrera', 'carreraId');
    }

    public function detalleSolicituds()
    {
        return $this->belongsToMany('App\DetalleSolicitud', 'DetalleSolicitudMateria', 'detalleSolicitudId', 'materiaId');
    }
}
