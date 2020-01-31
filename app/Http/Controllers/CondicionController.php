<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condicion;

class CondicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $condicions = Condicion::all();

        // dd($categories);

        return view('admin.condicion.index', compact('condicions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $condicion = Condicion::create($request->all());

        $condicion->save();

        return back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $condicion = Condicion::findOrFail($request->condicion_id);


        $condicion->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $condicion = Condicion::findOrFail($request->condicion_id);

        $condicion->delete();

        return back();
    }
}
