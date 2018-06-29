<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'Carreras';

    public function personas(){
        return $this->hasMany('App\Persona', 'carreraId');
    }

    public function materias(){
        return $this->hasMany('App\Materia', 'carreraId');
    }
}
