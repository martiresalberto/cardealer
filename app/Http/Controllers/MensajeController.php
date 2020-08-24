<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function index()
    {
        return view('Front-end.mensajes.index');
    }
    
    public function show()
    {
        return view('Front-end.mensajes.mostrarMensajes');
    }


}
