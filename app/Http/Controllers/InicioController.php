<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;
use App\User;
use App\File;
use Illuminate\Notifications\DatabaseNotification;


class InicioController extends Controller
{


    //Metodo para mostrar los cabezales de reciente ingreso en la pagina de inicio

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //cabezales de reciente ingreso pagina de inicio

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


        // dd($predios);

        return view('Front-end.cabezales.index', compact('predios','furgones','carros'));
    }

    // Metodo para mostrar detalles-cabezal en la pagina de inicio

    public function show($id)
    {

        //Aca se muestran el detalle de cabezales de reciente ingreso en la pagina de inicio

        $predio = Predio::with([
            'files' => function ($query) {
                $query->select('id', 'url', 'predio_id'); # Uno a muchos
            },
            'videos' => function ($query) {
                $query->select('id', 'urlVideo', 'predio_id'); # Uno a muchos
            },
            'user' => function ($query) {
                $query->select('id', 'name', 'email', 'image'); # Uno a muchos
            }
        ])->first(['id', 'titulo', 'usuario', 'precio', 'modelo', 'km', 'descripcioncompleta', 'ubicacion', 'ubicacion', 'category_id', 'condicion', 'user_id']);


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

        // dd($predio);

        return view('Front-end.cabezales.show', compact('predio', 'furgones'));
    }
}
