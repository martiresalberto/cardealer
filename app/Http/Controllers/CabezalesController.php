<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;

class CabezalesController extends Controller
{
    // Pagina de cabezales completa 


    public function cabezales()
    {
        //cabezales de reciente ingreso 

        $predios = Predio::with([
            'files' => function ($query) {
                $query->select('id', 'url', 'predio_id'); # Uno a muchos
            }
        ])->get(['id', 'titulo', 'usuario', 'precio', 'modelo', 'km', 'descripcioncompleta', 'ubicacion', 'ubicacion', 'categoria', 'condicion', 'user_id']);


        return view('Front-end.cabezales.index', compact('predios'));
    }

    public function cabezalesshow($id)
    {

        //Ruta para la pagina de detalle de cabezal show

        $predio = Predio::with([
            'files' => function ($query) {
                $query->select('id', 'url', 'predio_id'); # Uno a muchos
            },
            'user' => function ($query) {
                $query->select('id', 'name', 'image'); # Uno a muchos
            }
        ])->first(['id', 'titulo', 'usuario', 'precio', 'modelo', 'km', 'descripcioncompleta', 'ubicacion', 'ubicacion', 'categoria', 'condicion', 'user_id']);

        // dd($predio);

        return view('Front-end.cabezales.show', compact('predio'));
    }

}
