<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'Personas';

    protected $fillable = [
      'carnet', 'nombre', 'apellido', 'dui', 'fechaNacimiento', 'sexo', 'carreraId',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'personaId');
    }

    public function carrera()
    {
        return $this->belongsTo('App\Carrera', 'carreraId');
    }
}
