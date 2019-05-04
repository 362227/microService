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

    public function getCount(){
        //$count = Turno::all();

        header('Content-type: application/json');

        echo json_encode(['value' => 4]);
    }
}
