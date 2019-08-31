<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabezal;
use App\Agent;

class PruebaController extends Controller
{
    
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $agents = Agent::all();
        $cabezales = Cabezal::whereMonth('created_at','06')->get();    

        return view('front-end.index',compact('cabezales','agents'));
    }

   

    public function vehicule($id)
    {
        $cabezals = Cabezal::where('id', $id)->first();
        
        // dd($cabezals);

        return view('front-end.show',compact('cabezals'));
    }
}
