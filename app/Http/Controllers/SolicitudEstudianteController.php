<?php

namespace App\Http\Controllers;

use App\Anexo;
use App\DetalleSolicitud;
use App\DetalleSolicitudMateria;
use App\Estado;
use App\Materia;
use App\Solicitud;
use App\TipoSolicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitudEstudianteController extends Controller
{

    /**
     * CONTRALADORES PETICIONES CAMBIO GRUPO
     */

    public function cambioGrupoCrear()
    {
        $user = Auth::user();
        $persona = $user->persona;
        $materias = $user->persona->carrera->materias;
        return view('estudiante.cambio-grupo', [
            'persona'    =>  $persona,
            'materias'   =>  $materias,
        ]);
    }


    public function cambioGrupoStore(Request $request)
    {
        $this->validate($request, [
            'telefono' => 'required|min:9|max:9|regex:/^[762]{1}[0-9]{3}-[0-9]{4}$/',
            'grupoActual' => 'required|numeric|different:grupoDeseado',
            'grupoDeseado' => 'required|numeric|different:grupoActual',
            'justificacion' => 'required|string|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'ciclo' => 'regex:/^[12]$/',
        ]);

        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => TipoSolicitud::all()[0]->id,
        ]);

        $detalle = new DetalleSolicitud();
        $detalle->solicitudId = $solicitud->id;
        $detalle->telefono = $request['telefono'];
        $detalle->justificacion = $request['justificacion'];
        $detalle->save();

        $materia = Materia::find($request['materia']);
        $pivote = new DetalleSolicitudMateria() ;
        $pivote->grupoActual = $request['grupoActual'];
        $pivote->grupoDeseado = $request['grupoDeseado'];
        $pivote->detalleSolicitudId = $detalle->id;
        $pivote->materiaId = $materia->id;
        $pivote->save();

        $user = Auth::user();
        $persona = $user->persona;
        $materias = $user->persona->carrera->materias;
        return redirect('estudiante/cambio-grupo/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona)->with('materias', $materias);
    }



    /**
     * CONTRALADORES PETICIONES DENUNCIA
     */
    public function denunciaCrear()
    {
        $user = Auth::user();
        $persona = $user->persona;
       


        return view('estudiante.denuncia',[
            'persona'=>$persona
            ]);
    }


    public function denunciaStore(Request $request)
    {
        $this->validate($request, [
            'anexo' => 'required|max:2018'
        ]);


        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => 2,
        ]);
        $detalle = new DetalleSolicitud();
        $detalle->solicitudId = $solicitud->id;
        $detalle->save();

        $files = $request->file('anexo');
        foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            $generado = str_random(25) . $filename;
            \Storage::disk('local')->put($generado,  \File::get($file));

            $anexo = new Anexo();
            $anexo->nombreOriginal = $filename;
            $anexo->ruta = $generado;
            $anexo->detalleSolicitudId = $detalle->id;
            $anexo->save();
        }
        $user = Auth::user();
        $persona = $user->persona;
        return redirect('estudiante/denuncia/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona);
    }
    /**
     *CONTROLADORES PETICIONES INSCRIPCION
     */
    public function inscripcionCrear()
    {
        $user = Auth::user();
        $persona = $user->persona;
        $materias = $user->persona->carrera->materias;

        return view('estudiante.inscripcion-extemporanea',[
            'persona'=>$persona,
            'materias'=>$materias
            ]);
    }


    public function inscripcionStore(Request $request)
    {
        $this->validate($request, [
            'telefono' => 'required|min:9|max:9|regex:/^[762]{1}[0-9]{3}-[0-9]{4}$/',
            'ciclo' => 'required|max:1|min:1|regex:/^[12]$/',
            'anio' => 'required|numeric|min:2018|max:2019',
            'materia1' => 'required|numeric|min:1',
            'materia2' => 'numeric',
            'materia3' => 'numeric',
            'materia4' => 'numeric',
            'anexo' => 'required|max:2018',
            'justificacion' => 'required|string|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        ]);

        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => 3,
        ]);

        $detalle = new DetalleSolicitud();
        $detalle->solicitudId = $solicitud->id;
        $detalle->telefono = $request['telefono'];
        $detalle->ciclo = $request['ciclo'];
        $detalle->anio = $request['anio'];
        $detalle->justificacion = $request['justificacion'];
        $detalle->save();

        $files = $request->file('anexo');
        foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            $generado = str_random(25) . $filename;
            \Storage::disk('local')->put($generado,  \File::get($file));

            $anexo = new Anexo();
            $anexo->nombreOriginal = $filename;
            $anexo->ruta = $generado;
            $anexo->detalleSolicitudId = $detalle->id;
            $anexo->save();
        }

        $materia = Materia::find($request['materia1']);
        $pivote = new DetalleSolicitudMateria();
        $pivote->detalleSolicitudId = $detalle->id;
        $pivote->materiaId = $materia->id;
        $pivote->save();

        if($request['materia2'] != 0) {
            $materia2 = Materia::find($request['materia2']);
            $pivote = new DetalleSolicitudMateria();
            $pivote->detalleSolicitudId = $detalle->id;
            $pivote->materiaId = $materia2->id;
            $pivote->save();
        }
        if($request['materia3'] != 0) {
            $materia3 = Materia::find($request['materia3']);
            $pivote = new DetalleSolicitudMateria();
            $pivote->detalleSolicitudId = $detalle->id;
            $pivote->materiaId = $materia3->id;
            $pivote->save();
        }
        if($request['materia4'] != 0) {
            $materia4 = Materia::find($request['materia4']);
            $pivote = new DetalleSolicitudMateria();
            $pivote->detalleSolicitudId = $detalle->id;
            $pivote->materiaId = $materia4->id;
            $pivote->save();
        }


        $user = Auth::user();
        $persona = $user->persona;
        $materias = $user->persona->carrera->materias;
        return redirect('estudiante/inscripcion-extemporanea/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona);
    }


    /**
     *CONTROLADORES PETICIONES MEMORIA SOCIAL CREAR
     */
    public function memoriaSocialCrear()
    {
        $user = Auth::user();
        $persona = $user->persona;

        return view('estudiante.memoria',['persona'=>$persona]);
    }


    public function memoriaSocialStore(Request $request)
    {
        $this->validate($request, [
            'fechaInicio' => 'required|date|after:2018-01-01',
            'fechaFin' => 'required|date|after:fechaInicio',
            'jefe' => 'required|max:75|string|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'anexo' => 'required|max:2018',
        ]);


        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => 4,
        ]);

        $detalle = new DetalleSolicitud();
        $detalle->solicitudId = $solicitud->id;
        $detalle->fechaInicio = $request['fechaInicio'];
        $detalle->fechaFinalizacion = $request['fechaFin'];
        $detalle->nombreJefeProSocial = $request['jefe'];
        $detalle->save();

        $files = $request->file('anexo');
        foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            $generado = str_random(25) . $filename;
            \Storage::disk('local')->put($generado,  \File::get($file));

            $anexo = new Anexo();
            $anexo->nombreOriginal = $filename;
            $anexo->ruta = $generado;
            $anexo->detalleSolicitudId = $detalle->id;
            $anexo->save();
        }

        $user = Auth::user();
        $persona = $user->persona;
        return redirect('estudiante/memoria-s-social/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona);
    }

    /**
     * CONTROLADORES PETICIONES PETICIONES ESPECIALES
     */
    public function peticionEspecialCrear()
    {
        $user = Auth::user();
        $persona = $user->persona;
       

        return view('estudiante.peticiones-especiales',[
            'persona'=>$persona,
        
            ]);
    }


    public function peticionEspecialStore(Request $request)
    {
        $this->validate($request, [
            'anexo' => 'required|max:2018',
        ]);


        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => 5,
        ]);

        $detalle = new DetalleSolicitud();
        $detalle->solicitudId = $solicitud->id;
        $detalle->save();

        $files = $request->file('anexo');
        foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            $generado = str_random(25) . $filename;
            \Storage::disk('local')->put($generado,  \File::get($file));

            $anexo = new Anexo();
            $anexo->nombreOriginal = $filename;
            $anexo->ruta = $generado;
            $anexo->detalleSolicitudId = $detalle->id;
            $anexo->save();
        }

        $user = Auth::user();
        $persona = $user->persona;
        return redirect('estudiante/peticiones-especiales/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona);
    }
    /**
     *CONTROLADORES PETICIONES PRORRORAGRA EGRESADO
     */
    public function prorrogaEgresadoCrear()
    {
        $user = Auth::user();
        $persona = $user->persona;
       

        return view('estudiante.prorroga-egresado',[
            'persona'=>$persona,
        
            ]);
    }


    public function prorrogaEgresadoStore(Request $request)
    {
        $this->validate($request, [
            'ciclo' => 'required|max:1|min:1|regex:/^[12]$/',
            'justificacion' => 'required|string|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'anio' => 'required|numeric|min:2018',
            'fechaFin' => 'required|date|before:today',
        ]);


        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => 6,
        ]);

        $detalle = new DetalleSolicitud();
        $detalle->solicitudId = $solicitud->id;
        $detalle->ciclo = $request['ciclo'];
        $detalle->anio = $request['anio'];
        $detalle->fechaFinalizacion = $request['fechaFin'];
        $detalle->justificacion = $request['justificacion'];
        $detalle->save();

        $user = Auth::user();
        $persona = $user->persona;
        return redirect('estudiante/prorroga-egresado/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona);
    }



    /**
     * CONTROLADORES PETICIONES RETIRO CICLO
     */
    public function retiroCicloCrear(){
        $user = Auth::user();
        $persona = $user->persona;
       
        return view('estudiante.retiro-ciclo',[
            'persona'=>$persona,
        
            ]);
    }


    public function retiroCicloStore(Request $request){
        return 'proceso de data';
    }

    /**
     * CONTROLADORES PETICIONES RETIRO MATERIA
     */
    public function retiroMateriaCrear(){
        $user = Auth::user();
        $persona = $user->persona;
        $materias = $user->persona->carrera->materias;
        return view('estudiante.retiro-materia',[
            'persona'=>$persona,
            'materias'=>$materias
            ]);
    }


    public function retiroMateriaStore(Request $request){
        return 'proceso de data';
    }



    /**
     * CONTROLADORES CONSULTA ESTUDIANTE
     */
    public function consultaIndex(){
        $user = Auth::user();
        $persona=$user->persona;
        $solicitudes = $user->solicituds;
     

        return view('estudiante.consulta',[
            'persona'=>$persona,
            'solicitudes'=>$solicitudes
            ]);
    }


    public function consultaShow($id){
        $user=Auth::user();
        $persona=$user->persona;
        $solicitudes=$user->solicituds;
        
        foreach ($solicitudes as $solicitud)
        {
            if($solicitud->id==$id)
            {   
                $solicitudShow=$solicitud;

                break;
            }
        }

        return view("estudiante.consulta-show",["solicitud"=>$solicitudShow]);
        





    }


    /**
     *
     */

}
