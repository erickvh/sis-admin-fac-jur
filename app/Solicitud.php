<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'Solicituds';

    protected $fillable = [
        'estadoId', 'userId', 'tipoSolicitudId'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'userId');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado', 'estadoId');
    }

    public function tipoSolicitud()
    {
        return $this->belongsTo('App\TipoSolicitud', 'tipoSolicitudId');
    }

    public function detalleSolicitud()
    {
        return $this->hasOne('App\DetalleSolicitud', 'solicitudId');
    }
}
