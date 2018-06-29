<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'Estados';

    public function solicituds()
    {
        return $this->hasMany('App\Solicituds', 'estadoId');
    }
}
