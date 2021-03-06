<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class MiperfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::where('id', '=' , auth()->id())->get();

        // dd($users);

        return view('admin.miperfil.index',compact('users'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        $users = User::findOrFail($request->user_id);

        // Subir imagen de perfil
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            if (auth()->user()->image) {
                
                // dd('/public/imagesUser/' , auth()->user()->image);
                Storage::delete('/public/imagesUser/' . auth()->user()->image);

            }
            $request->image->storeAs('imagesUser', $filename , 'public');
            auth()->user()->update(['image' => $filename]);
        }

        return back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($request->user_id);

        $users->delete();

        return back();
    }
}
