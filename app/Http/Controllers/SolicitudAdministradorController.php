<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Persona;
use App\Solicitud;
use App\User;

class SolicitudAdministradorController extends Controller
{
    /**
     * CONTROLADORES REGISTRO USUARIO
     */
    public function registroUserCrear(){
        $roles = Role::all();
        return view('administracion.registrar')->with('roles', $roles);
    }


    public function registroUserStore(Request $request){
        $request['email'] = strtolower($request['email']);
        $this->validate($request, [
            'nombre' => 'required|string|max:60|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellido' => 'required|string|max:60|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'dui' => 'required|max:10|regex:/^[0-9]{8}-[0-9]{1}$/',
            'email' => 'required|string|email|max:50|unique:users',
            'nacimiento' => 'required|date|before:2003-01-01',
            'sexo' => 'required|min:1|max:1|regex:/^[FM]$/',
            'rol' => 'required|numeric|min:2'
        ]);

        $persona = Persona::create([
            'nombre' => strtoupper($request['nombre']),
            'apellido' => strtoupper($request['apellido']),
            'dui' => $request['dui'],
            'fechaNacimiento' => $request['nacimiento'],
            'sexo' => $request['sexo'],
        ]);

        $usuario = User::create([
            'email' => $request['email'],
            'personaId' => $persona->id,
            'password' => bcrypt("secret"),
        ]);
        $usuario->assignRole($request['rol']);

        $dates = array('token' => $usuario->token);
        $this->Email($dates, $request['email']);


        return back()->with('status', 'Confirmacion enviada al correo electronico del solicitante.');
    }
    protected function Email($dates, $email)
    {
        Mail::send('emails.confirmations', $dates, function($message) use ($email) {
            $message->subject('Valida tu Cuenta UES');
            $message->to($email);
            $message->from('prueba.jurisprudencia.ues@gmail.com', 'Secretaría Jurisprudencia');
        });
    }

    /**
     * CONTROLADORES CONSULTA DOCENTE PETICIONES
     */
    public function consultaDocenteIndex(){
        $solicitudes=Solicitud::where('tipoSolicitudId','>=',9)->where('tipoSolicitudId','<=',13)->get();
        return view('administracion.consulta-docente',['solicitudes'=>$solicitudes]);
    }


    public function consultaDocenteShow($id){
        $solicitud=Solicitud::find($id);
        return view('administracion.consulta-docente-show',['solicitud'=>$solicitud]);
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
        $solicitud=Solicitud::find($id);
        return view('administracion.consulta-otro-show',['solicitud'=>$solicitud]);
    }        

}
