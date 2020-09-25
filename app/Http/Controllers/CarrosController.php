<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;

class CarrosController extends Controller
{
    public function carros()
    {
        //cabezales de reciente ingreso 

        $carros = Predio::where('category_id', '=', '5')
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



        return view('Front-end.carros.index', compact('carros'));
    }
}
