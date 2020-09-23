<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Predio;

class HomeAdminController extends Controller
{

    //Metodo para mostrar cabezales

    public function cabezales()
    {

        $predios = Predio::with([
            'files' => function ($query) {
                $query->select('id', 'url', 'predio_id'); # Uno a muchos
            }
        ])->get([
            'id', 'titulo', 'usuario',
            'precio', 'modelo', 'km',
            'descripcioncompleta', 'ubicacion',
            'ubicacion', 'categoria', 'condicion', 'user_id'
        ]);


        return view('admin.home.cabezales', compact('predios'));
    }


    public function furgones()
    {
       
        $predios = Predio::with([
            'files' => function ($query) {
                $query->select('id', 'url', 'predio_id'); # Uno a muchos
            },
            'user' => function ($query) {
                $query->select('id', 'name'); # Uno a muchos
            },
        ])->first([
            'id', 'titulo', 'usuario',
            'precio', 'modelo', 'km',
            'descripcioncompleta', 'ubicacion',
            'ubicacion', 'categoria', 'condicion', 'user_id'
        ]);

        dd($predios);

        return view('admin.home.furgones', compact('predios'));
    }
}
