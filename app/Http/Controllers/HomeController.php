<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turno;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addTurno(){
        $turno = new Turno;
        $turno->cod_consultorio = 1;
        $turno->documento_usuario = 1;
        $turno->cod_tipo_documento = 1;
        $turno->documento_medico = 1;
        $turno->cod_tipo_documento_medico = 1;
        $turno->save();
        return redirect('/');
    }
    public function getCount(){
        $count = Turno::all();

        header('Content-type: application/json');

        echo json_encode(['value' => count($count)]);
    }
}
