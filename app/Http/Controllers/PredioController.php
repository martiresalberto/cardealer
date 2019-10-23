<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;
use App\Category;
use App\User;
use App\Condicion;

class PredioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $predio = Predio::all();

        $condicion = Condicion::all();

        $categories = Category::all();

        $users = User::where('id', '=', auth()->id())->get();

        return view('admin.predio.index', compact('predio', 'condicion', 'categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $predio = Predio::create($request->all());

        if ($request->hasFile('imgTrans')) {
            $predio->imgTrans = $request->file('imgTrans')->store('public');
        }


        $predio->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
