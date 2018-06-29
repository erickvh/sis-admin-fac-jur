<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudEstudianteController extends Controller
{
    /**
     * CONTRALADORES PETICIONES CAMBIO GRUPO
     */

    public function cambioGrupoCrear(){
        return view('estudiante.cambio-grupo');
    }


    public function cambioGrupoStore(Request $request){
        return 'proceso de data';
    }



    /**
     * CONTRALADORES PETICIONES DENUNCIA
     */
    public function denunciaCrear(){
        return view('estudiante.denuncia');
    }


    public function denunciaStore(Request $request){
        return 'proceso data';
    }
    /**
     *CONTROLADORES PETICIONES INSCRIPCION
     */
    public function inscripcionCrear(){
        return view('estudiante.inscripcion-extemporanea');
    }


    public function inscripcionStore(Request $request){
        return 'proceso de data';
    }


    /**
     *CONTROLADORES PETICIONES MEMORIA SOCIAL CREAR
     */
    public function memoriaSocialCrear(){
        return view('estudiante.memoria');
    }


    public function memoriaSocialStore(Request $request){
        return 'proceso de data';
    }

    /**
     * CONTROLADORES PETICIONES PETICIONES ESPECIALES
     */
    public function peticionEspecialCrear(){
        return view('estudiante.peticiones-especiales');
    }


    public function peticionEspecialStore(Request $request){
        return 'proceso de data';
    }
    /**
     *CONTROLADORES PETICIONES PRORRORAGRA EGRESADO
     */
    public function prorrogaEgresadoCrear(){
        return view('estudiante.prorroga-egresado');
    }


    public function prorrogaEgresadoStore(Request $request){
        return 'proceso de data';
    }



    /**
     * CONTROLADORES PETICIONES RETIRO CICLO
     */
    public function retiroCicloCrear(){
        return view('estudiante.retiro-ciclo');
    }


    public function retiroCicloStore(Request $request){
        return 'proceso de data';
    }

    /**
     * CONTROLADORES PETICIONES RETIRO MATERIA
     */
    public function retiroMateriaCrear(){
        return view('estudiante.retiro-materia');
    }


    public function retiroMateriaStore(Request $request){
        return 'proceso de data';
    }



    /**
     * CONTROLADORES CONSULTA ESTUDIANTE
     */
    public function consultaIndex(){
        return view('estudiante.consulta');
    }


    public function consultaShow($id){
        return view("estudiante.consulta-show",["id"=>$id]);
    }


    /**
     *
     */

}
