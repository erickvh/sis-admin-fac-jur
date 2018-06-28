<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudEstudianteController extends Controller
{
    /**
     * CONTRALADORES PETICIONES CAMBIO GRUPO
     */

    public function cambioGrupoCrear(){
        return 'aqui debe ir formulario cambio grupo';
    }


    public function cambioGrupoStore(Request $request){
        return 'proceso de data';
    }



    /**
     * CONTRALADORES PETICIONES DENUNCIA
     */
    public function denunciaCrear(){
        return 'aqui debe ir formulario denuncia';
    }


    public function denunciaStore(Request $request){
        return 'proceso de data';
    }
    /**
     *CONTROLADORES PETICIONES INSCRIPCION
     */
    public function inscripcionCrear(){
        return 'aqui debe ir formulario inscripcion extemporanea';
    }


    public function inscripcionStore(Request $request){
        return 'proceso de data';
    }

    
    /**
     *CONTROLADORES PETICIONES MEMORIA SOCIAL CREAR
     */
    public function memoriaSocialCrear(){
        return 'aqui debe ir formulario memoria social';
    }


    public function memoriaSocialStore(Request $request){
        return 'proceso de data';
    }
   
    /**
     * CONTROLADORES PETICIONES PETICIONES ESPECIALES
     */
    public function peticionEspecialCrear(){
        return 'aqui debe ir formulario peticiones especiales';
    }


    public function peticionEspecialStore(Request $request){
        return 'proceso de data';
    }        
    /**
     *CONTROLADORES PETICIONES PRORRORAGRA EGRESADO
     */
    public function prorrogaEgresadoCrear(){
        return 'aqui debe ir formulario prorroga egresado';
    }


    public function prorrogaEgresadoStore(Request $request){
        return 'proceso de data';
    }


    
    /**
     * CONTROLADORES PETICIONES RETIRO CICLO
     */
    public function retiroCicloCrear(){
        return 'aqui debe ir formulario retiro ciclo';
    }


    public function retiroCicloStore(Request $request){
        return 'proceso de data';
    }    

    /**
     * CONTROLADORES PETICIONES RETIRO MATERIA
     */
    public function retiroMateriaCrear(){
        return 'aqui debe ir formulario retiro materia';
    }


    public function retiroMateriaStore(Request $request){
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


    /**
     * 
     */

}
