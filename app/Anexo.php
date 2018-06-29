<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    protected $table = 'Anexos';

    public function detalleSolicitud()
    {
        return $this->belongsTo('App\DetalleSolicitud', 'detalleSolicitudId');
    }
}
