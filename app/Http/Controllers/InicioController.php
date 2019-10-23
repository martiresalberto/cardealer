<?php

namespace App\Http\Controllers;

use App\Predio;
use Illuminate\Http\Request;

class InicioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $vehiculos_recientes = Predio::whereMonth('created_at', '06')->get();
        $vehiculos_recientes = Predio::all();

        return view('Front-end.index', compact('vehiculos_recientes'));
    }
}
