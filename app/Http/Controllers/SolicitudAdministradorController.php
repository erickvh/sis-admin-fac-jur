<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class SolicitudAdministradorController extends Controller
{
    /**
     * CONTROLADORES REGISTRO USUARIO
     */
    public function registroUserCrear(){
        return view('administracion.registrar');
    }


    public function registroUserStore(Request $request){
        return 'proceso de data';
    }        

    /**
     * CONTROLADORES CONSULTA DOCENTE PETICIONES
     */
    public function consultaDocenteIndex(){
        return view('administracion.consulta-docente');
    }


    public function consultaDocenteShow($id){
        return view('administracion.consulta-docente-show');
    }    
    
    /**
     * CONTROLADORES CONSULTA ESTUDIANTE PETICIONES
     */
    public function consultaEstudianteIndex(){
        
        return view('administracion.consulta-estudiante');
    }


    public function consultaEstudianteShow($id){
        return view('administracion.consulta-estudiante-show');
    }    

    /**
     * CONTROLADORES CONSULTA OTROS PETICIONES
     */
    public function consultaOtroIndex(){
        return view('administracion.consulta-otro');
    }


    public function consultaOtroShow($id){
        return view('administracion.consulta-otro-show');
    }        

}
