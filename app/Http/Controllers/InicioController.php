<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;
use App\Category;

class InicioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $predio = Predio::whereMonth('created_at', '12')->get();
        $featured = Predio::whereYear('updated_at', '2019')
            ->get();

        // dd($featured);

        return view('Front-end.index', compact('predio', 'featured'));
    }
}
