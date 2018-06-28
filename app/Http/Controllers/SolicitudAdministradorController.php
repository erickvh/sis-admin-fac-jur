<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudAdministradorController extends Controller
{
    /**
     * CONTROLADORES REGISTRO USUARIO
     */
    public function registroUserCrear(){
        return 'aqui debe ir formulario registro usuario crear';
    }


    public function registroUserStore(Request $request){
        return 'proceso de data';
    }        

    /**
     * CONTROLADORES CONSULTA DOCENTE PETICIONES
     */
    public function consultaDocenteIndex(){
        return 'aqui debe desplegarse la consulta de peticiones hechas docentes';
    }


    public function consultaDocenteShow($id){
        return 'aqui debe ir la peticion selecion docente '.$id;
    }    
    
    /**
     * CONTROLADORES CONSULTA ESTUDIANTE PETICIONES
     */
    public function consultaEstudianteIndex(){
        return 'aqui debe desplegarse la consulta de peticiones hechas estudiantes';
    }


    public function consultaEstudianteShow($id){
        return 'aqui debe ir la peticion selecion estudiante '.$id;
    }    

    /**
     * CONTROLADORES CONSULTA OTROS PETICIONES
     */
    public function consultaOtroIndex(){
        return 'aqui debe desplegarse la consulta de peticiones hechas otras entidades';
    }


    public function consultaOtroShow($id){
        return 'aqui debe ir la peticion selecion otra entidad '.$id;
    }        

}
