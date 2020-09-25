<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;


class FurgonesController extends Controller
{
    public function furgones()
    {
        //cabezales de reciente ingreso 


        $furgones = Predio::where('category_id', '=', '2')
            ->with([
                'files' => function ($query) {
                    $query->select('id', 'url', 'predio_id'); # Uno a muchos
                }
            ])->get([
                'id', 'titulo', 'usuario',
                'precio', 'modelo', 'km',
                'descripcioncompleta', 'ubicacion',
                'ubicacion', 'category_id', 'condicion', 'user_id'
            ]);



        return view('Front-end.furgones.index', compact('furgones'));
    }
}
