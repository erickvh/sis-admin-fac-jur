<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitudEstudianteController extends Controller
{

    /**
     * Estados posibles de una peticion
     * @var int
     */
    protected $aunNoRevisado = 1;

    /**
     * CONTRALADORES PETICIONES CAMBIO GRUPO
     */

    public function cambioGrupoCrear(){
        $user = Auth::user();
        $persona = $user->persona;
        $materias = $user->persona->carrera->materias;
        return view('estudiante.cambio-grupo', [
            'persona'    =>  $persona,
            'materias'   =>  $materias,
        ]);
    }


    public function cambioGrupoStore(Request $request){
        $this->validate($request, [
            'telefono' => 'required|min:9|max:9|regex:/^[762]{1}[0-9]{3}-[0-9]{4}$/',
            'grupoActual' => 'required|min:1|max:3|numeric',
            'grupoDeseado' => 'required|min:1|max:3|numeric|different:grupoActual',
            'justificacion' => 'required|string|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/'
        ]);


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
