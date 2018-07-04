<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudOtrosController extends Controller
{
    public function peticionCrear(){

        return view('otros.crear-solicitud');
    }
    public function PeticionStore(){
        
    }

    public function consultaIndex(){
        return view('otros.consultar');
    }
}
