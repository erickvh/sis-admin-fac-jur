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
        $solicitudes=Solicitud::where('tipoSolicitudId','>=',9)->where('tipoSolicitudId','<=',13)->get();
        return view('administracion.consulta-docente',['solicitudes'=>$solicitudes]);
    }


    public function consultaDocenteShow($id){
        return view('administracion.consulta-docente-show');
    }    
    
    /**
     * CONTROLADORES CONSULTA ESTUDIANTE PETICIONES
     */
    public function consultaEstudianteIndex(){
        $solicitudes=Solicitud::where('tipoSolicitudId','>=',1)->where('tipoSolicitudId','<=',8)->get();
        return view('administracion.consulta-estudiante',['solicitudes'=>$solicitudes]);
    }


    public function consultaEstudianteShow($id){
        $solicitud=Solicitud::find($id);
        return view('administracion.consulta-estudiante-show',['solicitud'=>$solicitud]);
    }    

    /**
     * CONTROLADORES CONSULTA OTROS PETICIONES
     */
    public function consultaOtroIndex(){
        $solicitudes=Solicitud::where('tipoSolicitudId','>=',14)->get();
        return view('administracion.consulta-otro',['solicitudes'=>$solicitudes]);
    }


    public function consultaOtroShow($id){

        return view('administracion.consulta-otro-show');
    }        

}
