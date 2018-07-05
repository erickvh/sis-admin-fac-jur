<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Estado;
use App\DetalleSolicitud;
use App\Anexo;
use App\Solicitud;

class SolicitudOtrosController extends Controller
{
    public function peticionCrear(){
        $user=Auth::user();
        $persona=$user->persona;
        return view('otros.crear-solicitud',['user'=>$user,'persona'=>$persona]);
    }
    
    public function PeticionStore(Request $request){
        $this->validate($request, [
            'anexo' => 'required|max:2018',
            'asunto'=> 'required|string|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/'
        ]);


        $solicitud = Solicitud::create([
            'userId' => Auth::id(),
            'estadoId' => Estado::all()[0]->id,
            'tipoSolicitudId' => 14 ,
        ]);

        $detalle = new DetalleSolicitud();
        $detalle->solicitudId = $solicitud->id;
        $detalle->justificacion=$request['asunto'];
        $detalle->save();

        $files = $request->file('anexo');

        foreach ($files as $file) {

            $guardado=$file->store('public');

            $anexo = new Anexo();
            $anexo->nombreOriginal = $file->getClientOriginalName();
            $anexo->ruta = $guardado;
            $anexo->detalleSolicitudId = $detalle->id;
            $anexo->save();
        }

        $user = Auth::user();
        $persona = $user->persona;
        return redirect('otros/peticion/crear')->with('status', 'Peticion Enviada con exito')->with('persona', $persona);
    }

    public function consultaIndex(){
        $user=Auth::user();
        $solicitudes=$user->solicituds;
        return view('otros.consultar',["solicitudes"=>$solicitudes]);
    }

    public function consultaShow($id){
        $solicitud=Solicitud::find($id);
        return view('otros.consultar-show',['solicitud'=>$solicitud]);
    }
}
