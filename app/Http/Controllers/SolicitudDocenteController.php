<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudDocenteController extends Controller
{
    /**
     * CONTRALADORES PETICIONES LICENCIA INCAPACIDAD
     */

    public function licenciaCrear(){
        return 'aqui debe ir formulario licencia de incapacidad';
    }


    public function licenciaStore(Request $request){
        return 'proceso de data';
    }    
    
    /**
     * CONTRALADORES PETICIONES MISIONES OFICIALES
     */

    public function misionOficialCrear(){
        return 'aqui debe ir formulario mision oficial';
    }


    public function misionOficialStore(Request $request){
        return 'proceso de data';
    }
    /**
     * CONTRALADORES PETICIONES DENUNCIAS CONTRA ESTUDIANTES
     */

    public function denunciaCrear(){
        return 'aqui debe ir formulario mision oficial';
    }


    public function denunciaStore(Request $request){
        return 'proceso de data';
    }

    /**
     * CONTRALADORES PETICIONES RECLASIFICACION
     */

    public function reclasificacionCrear(){
        return 'aqui debe ir formulario reclasificacion';
    }


    public function reclasificacionlStore(Request $request){
        return 'proceso de data';
    }
    
    /**
     * CONTRALADORES PETICIONES ESPECIALES
     */

    public function peticionEspecialCrear(){
        return 'aqui debe ir el formulario peticiones especiales';
    }


    public function peticionEspecialStore(Request $request){
        return 'proceso de data';
    }


    /**
     * CONTROLADORES CONSULTA ESTUDIANTE
     */
    public function consultaIndex(){
        return 'aqui debe desplegarse la consulta de peticiones hechas';
    }


    public function consultaShow($id){
        return 'aqui debe ir la peticion selecion '.$id;
    }        


        
        
}
