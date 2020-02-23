<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $predios = Predio::with('files')->get();

        // $predios = DB::table('predios')
        //     ->join('files', 'files.id', '=', 'files.predio_id')
        //     ->select('files.url as imagen')
        //     ->get();

        $featured = Predio::whereYear('updated_at', '2020')
            ->get();

        // dd($predios);

        return view('Front-end.index', compact('predios', 'featured'));
    }


    public function show($id)
    {

        $predios = Predio::with('files')->findOrFail($id)->get();

        // dd($predios);

        return view('Front-end.show', compact('predios'));
    }
}
