<?php

namespace App\Http\Controllers\Auth;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['email'] = strtolower($data['email']);
        return Validator::make($data, [
            'email' => 'required|string|email|min:18|max:18|unique:users|regex:/^[a-zA-Z]{2}[78901]{1}[0-9]{4}@ues.edu.sv$/',
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
        ]);
        $usuario = User::create([
          'email' => $correo,
          'personaId' => $persona->id,
        ]);

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
}
