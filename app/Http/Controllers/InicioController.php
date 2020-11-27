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

        //cabezales de reciente ingreso por categoeria

        $predios = Predio::where('category_id', '=', '1')
            ->with([
                'files' => function ($query) {
                    $query->select('id', 'url', 'predio_id'); # Uno a muchos
                }
            ])->latest()->take(3)->get([
                'id', 'titulo',
                'precio', 'modelo_id', 'km',
                'descripcioncompleta', 'category_id',
                'condicion_id', 'user_id'
            ]);


        $furgones = Predio::where('category_id', '=', '3')
            ->with([
                'files' => function ($query) {
                    $query->select('id', 'url', 'predio_id'); # Uno a muchos
                }
            ])->get([
                'id', 'titulo',
                'precio', 'modelo_id', 'km',
                'descripcioncompleta',
                'ubicacion_id', 'category_id',
                'condicion_id', 'user_id'
            ]);


        $carros = Predio::where('category_id', '=', '4')
            ->with([
                'files' => function ($query) {
                    $query->select('id', 'url', 'predio_id'); # Uno a muchos
                }
            ])->get([
                'id', 'titulo',
                'precio', 'modelo_id', 'km',
                'descripcioncompleta', 'category_id',
                'condicion_id', 'user_id','ubicacion_id'
            ]);


        // dd($predios);

        return view('Front-end.cabezales.index', compact('predios','furgones','carros'));
    }

    // Metodo para mostrar detalles-cabezal en la pagina de inicio

    public function cabezal($id)
    {
        //Aca se muestran el detalle de cabezales de reciente ingreso en la pagina de inicio

        $cabezales = Predio::where('id','=',$id)
        ->with([
            'files' => function ($query) {
                $query->select('id', 'url', 'predio_id'); # Uno a muchos
            },
            'videos' => function ($query) {
                $query->select('id', 'urlVideo', 'predio_id'); # Uno a muchos
            },
            'user' => function ($query) {
                $query->select('id', 'name', 'email', 'image'); # Uno a muchos
            }
        ])->first(['id', 'titulo', 'precio', 'modelo_id', 'km', 'descripcioncompleta', 'ubicacion_id', 'category_id', 'condicion_id', 'user_id']);


        // dd($cabezales);

        return view('Front-end.cabezales.show', compact('cabezales'));

    }

    public function furgon($id)
    {

        $furgones = Predio::where('id', '=', $id)
            ->with([
                'files' => function ($query) {
                    $query->select('id', 'url', 'predio_id'); # Uno a muchos
                },
                'videos' => function ($query) {
                    $query->select('id', 'urlVideo', 'predio_id'); # Uno a muchos
                },
            ])->first(['id', 'titulo','precio', 'modelo_id', 'km','descripcioncompleta', 'ubicacion_id','category_id', 'condicion_id', 'user_id']);

        // dd($predio);

        return view('Front-end.furgones.showfurgon', compact('furgones'));
    }


    public function carro($id)
    {

        $carros = Predio::where('id', '=', $id)
            ->with([
                'files' => function ($query) {
                    $query->select('id', 'url', 'predio_id'); # Uno a muchos
                },
                'videos' => function ($query) {
                    $query->select('id', 'urlVideo', 'predio_id'); # Uno a muchos
                },
            ])->first([
                'id', 'titulo',
                'precio', 'modelo_id', 'km',
                'descripcioncompleta', 'ubicacion_id',
                'category_id', 'condicion_id', 'user_id'
            ]);

        // dd($predio);

        return view('Front-end.carros.showcarros', compact('carros'));
    }


}
