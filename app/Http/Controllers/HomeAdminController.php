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

        
        $predios = Predio::where('category_id', '=' ,'1')
        ->get(['id', 'titulo', 'usuario',
        'precio', 'modelo', 'km',
        'descripcioncompleta', 'ubicacion',
        'ubicacion', 'category_id', 'condicion', 'user_id']);


        return view('admin.home.cabezales', compact('predios'));
    }


    public function furgones()
    {
       
        $predios = Predio::where('category_id', '=' ,'2')
        ->get(['id', 'titulo', 'usuario',
        'precio', 'modelo', 'km',
        'descripcioncompleta', 'ubicacion',
        'ubicacion', 'category_id', 'condicion', 'user_id']);

        // dd($predios);

        return view('admin.home.furgones', compact('predios'));
    }

    
    public function carros()
    {
       
        $predios = Predio::where('category_id', '=' ,'5')
        ->get(['id', 'titulo', 'usuario',
        'precio', 'modelo', 'km',
        'descripcioncompleta', 'ubicacion',
        'ubicacion', 'category_id', 'condicion', 'user_id']);

        // dd($predios);

        return view('admin.home.carros', compact('predios'));
    }

}
