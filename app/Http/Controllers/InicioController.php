<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;
use App\User;
use App\File;

class InicioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //cabezales de reciente ingreso 

        $predios = Predio::with('files')->get();

        //cabezales por ingresar 

        $featured = Predio::whereYear('created_at', '2020')
            ->get();


        return view('Front-end.index', compact('predios', 'featured'));
    }


    public function show($id)
    {

        $predio = Predio::with([
            'files' => function ($query) {
                $query->select('id', 'url', 'predio_id'); # Uno a muchos
            },
            'user' => function ($query) {
                $query->select('id', 'name','image'); # Uno a muchos
            }
        ])->first(['id', 'titulo', 'usuario', 'precio', 'modelo', 'km', 'descripcioncompleta', 'ubicacion', 'ubicacion', 'categoria', 'condicion', 'user_id']);

        // dd($predio);

        return view('Front-end.show', compact('predio'));
    }


    // Pagina de inicio cabezales


    public function cabezales()
    {
        $predios = Predio::all();

        return view('Front-end.cabezales.index', compact('predios'));
    }
}
