<?php

namespace App\Http\Controllers;

use App\Anexo;
use App\DetalleSolicitud;
use App\Estado;
use App\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitudDocenteController extends Controller
{
    private $incapacidad = 9;
    private $misionOficial=10;
    private $denunciaCEstu = 11;
    private $reclasificacion = 12;
    private $petiOtros = 13;

    /**
     * CONTRALADORES PETICIONES LICENCIA INCAPACIDAD
     */

    public function licenciaCrear(){
        $user = Auth::user();
        $persona = $user->persona;
        return view('docente.licencia', ['persona' => $persona]);
    }


    public function licenciaStore(Request $request){
        $this->validate($request, [
            'fechaInicio' => 'required|date|after:yesterday',
            'fechaFin' => 'required|date|after:yesterday',
            'anexo' => 'required|max:2018',
        ]);


        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => $this->incapacidad,
        ]);

        $detalle = new DetalleSolicitud();
        $detalle->solicitudId = $solicitud->id;
        $detalle->fechaInicio = $request['fechaInicio'];
        $detalle->fechaFinalizacion = $request['fechaFin'];
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
        return redirect('docente/licencia-incapacidad/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona);
    }    
    
    /**
     * CONTRALADORES PETICIONES MISIONES OFICIALES
     */

    public function misionOficialCrear(){
        $user = Auth::user();
        $persona = $user->persona;
        return view('docente.misiones', ['persona' => $persona]);
    }


    public function misionOficialStore(Request $request){
        $this->validate($request, [
            'fechaInicio' => 'required|date|after:yesterday',
            'fechaFin' => 'required|date|after:yesterday',
            'anexo' => 'required|max:2018',
        ]);


        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => $this->misionOficial,
        ]);

        $detalle = new DetalleSolicitud();
        $detalle->solicitudId = $solicitud->id;
        $detalle->fechaInicio = $request['fechaInicio'];
        $detalle->fechaFinalizacion = $request['fechaFin'];
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
        return redirect('docente/misiones-oficiales/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona);
    }
    /**
     * CONTRALADORES PETICIONES DENUNCIAS CONTRA ESTUDIANTES
     */

    public function denunciaCrear(){
        $user =  Auth::user();
        $persona = $user->persona;
        return view('docente.denuncia', ['persona' => $persona]);
    }


    public function denunciaStore(Request $request){
        $this->validate($request, [
            'anexo' => 'required|max:2018',
        ]);

        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => $this->denunciaCEstu,
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

        $user =  Auth::user();
        $persona = $user->persona;
        return redirect('docente/denuncias-c-estudiantes/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona);
    }

    /**
     * CONTRALADORES PETICIONES RECLASIFICACION
     */

    public function reclasificacionCrear(){
        return view('docente.reclasificacion');
    }


    public function reclasificacionStore(Request $request){
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
        $user=Auth::user();
        $solicitudes=$user->solicituds;  
        return view('docente.consulta',['solicitudes'=>$solicitudes]);
    }


    public function consultaShow($id){
      
        return view('docente.consulta-show',["id"=>$id]);
    }        


        
        
}
