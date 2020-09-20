<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Predio;

class HomeAdminController extends Controller
{
    public function index()
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


        return view('admin.home.index',compact('predios'));
    }
}
