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


        $predios = Predio::where('category_id', '=', '1')
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


        return view('Front-end.cabezales.detalle.index', compact('predios'));
    }

    public function cabezalesshow($id)
    {

        //Ruta para la pagina de detalle de cabezal show

        $predios = Predio::with([
            'files' => function ($query) {
                $query->select('id', 'url', 'predio_id'); # Uno a muchos
            },
            'user' => function ($query) {
                $query->select('id', 'name', 'image'); # Uno a muchos
            }
        ])->first(['id', 'titulo', 'usuario', 'precio', 'modelo', 'km', 'descripcioncompleta', 'ubicacion', 'ubicacion', 'category_id', 'condicion', 'user_id']);

        // dd($predios);

        return view('Front-end.cabezales.detalle.show', compact('predios'));
    }

}
