<?php

namespace App\Http\Controllers\Auth;

use App\Carrera;
use App\Persona;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Retornar el formulario de registro
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        $carreras = Carrera::all();
        return view('auth.register')->with('carreras', $carreras);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['email'] = strtolower($data['email']);
        return Validator::make($data, [
            'nombre' => 'required|string|max:60|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellido' => 'required|string|max:60|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'dui' => 'max:10|regex:/^[0-9]{8}-[0-9]{1}$/',
            'email' => 'required|string|email|min:18|max:18|unique:users|regex:/^[a-zA-Z]{2}[78901]{1}[0-9]{4}@ues.edu.sv$/',
            'nacimiento' => 'required|date|before:2003-01-01',
            'sexo' => 'required|min:1|max:1|regex:/^[FM]$/',
            'password' => 'required|min:5|max:25|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $correo = strtolower($data['email']);
        $carnet = substr($correo, 0, 7);

        $persona = Persona::create([
            'carnet' => $carnet,
            'nombre' => strtoupper($data['nombre']),
            'apellido' => strtoupper($data['apellido']),
            'dui' => $data['dui'],
            'fechaNacimiento' => $data['nacimiento'],
            'sexo' => $data['sexo'],
            'carreraId' => $data['carrera'],
        ]);
        $usuario = User::create([
          'email' => $correo,
          'personaId' => $persona->id,
           'password' => bcrypt($data['password']),
        ]);
        $usuario->assignRole(1);

        $dates = array('token' => $usuario->token);
        $this->Email($dates, $correo);

        return $usuario;
    }

    protected function Email($dates, $email)
    {
        Mail::send('emails.confirmation', $dates, function($message) use ($email) {
            $message->subject('Valida tu cuenta Estudiantil UES');
            $message->to($email);
            $message->from('prueba.jurisprudencia.ues@gmail.com', 'Secretaría Jurisprudencia');
        });
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));



        return back()->with('status', 'Revisa la bandeja de entrada o la bandeja de spam de tu Correo Institucional.');
    }

    public function confirmEmail($token)
    {
        User::whereToken($token)->firstOrFail()->Verified();

        return redirect('login')->with('status', 'Cuenta Verificada con Exito. Inicia Sesión para continuar');
    }
}
