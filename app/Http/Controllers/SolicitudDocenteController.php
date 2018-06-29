<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudDocenteController extends Controller
{
    /**
     * CONTRALADORES PETICIONES LICENCIA INCAPACIDAD
     */

    public function licenciaCrear(){
        return view('docente.licencia');
    }


    public function licenciaStore(Request $request){
        return 'proceso de data';
    }    
    
    /**
     * CONTRALADORES PETICIONES MISIONES OFICIALES
     */

    public function misionOficialCrear(){
        return view('docente.misiones');
    }


    public function misionOficialStore(Request $request){
        return 'proceso de data';
    }
    /**
     * CONTRALADORES PETICIONES DENUNCIAS CONTRA ESTUDIANTES
     */

    public function denunciaCrear(){
        return view('docente.denuncia');
    }


    public function denunciaStore(Request $request){
        return 'proceso de data';
    }

    /**
     * CONTRALADORES PETICIONES RECLASIFICACION
     */

    public function reclasificacionCrear(){
        return view('docente.reclasificacion');
    }


    public function reclasificacionlStore(Request $request){
        return 'proceso de data';
    }
    
    /**
     * CONTRALADORES PETICIONES ESPECIALES
     */

    public function peticionEspecialCrear(){
        return view('docente.peticiones');
    }


    public function peticionEspecialStore(Request $request){
        return 'proceso de data';
    }


    /**
     * CONTROLADORES CONSULTA ESTUDIANTE
     */
    public function consultaIndex(){
        return view('docente.consulta');
    }


    public function consultaShow($id){
        
        return view('docente.consulta-show',["id"=>$id]);
    }        


        
        
}
