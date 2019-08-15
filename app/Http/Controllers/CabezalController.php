<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabezal;
use App\Category;
use App\User;

class CabezalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cabezals = Cabezal::all();

        $categories = Category::all();
         
        $users = User::all(); 

        return view('admin.cabezal.index',compact('cabezals','categories','users'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cabezal = Cabezal::create( $request->all() );

        if($request->hasFile('imgCabezal'))
        {
            $cabezal->imgCabezal = $request->file('imgCabezal')->store('public');
        }
        

        $cabezal->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
         

        $cabezal = Cabezal::findOrFail($request->cabezal_id);

        $cabezal->update($request->all());

        if($request->hasFile('imgCabezal'))
        {
            $cabezal->imgCabezal = $request->file('imgCabezal')->store('public');
        }
        

        $cabezal->update();

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
         
        $cabezal = Cabezal::findOrFail($request->cabezal_id);
     
        $cabezal->delete();
     
        return back();
    }
}
