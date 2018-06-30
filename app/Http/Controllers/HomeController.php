<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $rol = $user->roles[0];
        switch ($rol->id) {
            case 1:
                return redirect('estudiante');
                break;
            case 2:
                return redirect('docente');
                break;
            case 3:
                return redirect('administracion');
                break;
            case 4:
                return redirect('otros');

        }
    }
}
