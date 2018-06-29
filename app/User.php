<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'personaId',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->token = str_random(40);
            $user->remember_token = str_random(60);
        });
    }

    public function Verified()
    {
        $this->habilitado = 1;
        $this->token = null;

        $this->save();
    }

    public function persona()
    {
        return $this->belongsTo('App\Persona', 'personaId');
    }

    public function solicituds()
    {
        return $this->hasMany('App\Solicitud', 'userId');
    }

    



}
