<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct()
    {
        $this->middleware(['auth', 'roles:admin,agente']);
    }

    public function index()
    {
        return view('Front-end.mensajes.index');
    }
    
    public function show()
    {
        return view('Front-end.mensajes.mostrarMensajes');
    }


}
