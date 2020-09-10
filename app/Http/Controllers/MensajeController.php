<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mensaje;
use App\Notifications\Msmenviado;

class MensajeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct()
    {
        $this->middleware(['auth', 'roles:admin,visitante']);
    }

    public function index()
    {

        $users = User::where('id','!=', auth()->id())->select("id","email")->first();


        // dd($users);

        return view('Front-end.mensajes.index',compact('users'));

    }

    public function store(Request $request)
    {
     
        //validate

        $mensaje = Mensaje::create([
           'sender_id' => auth()->id(),
           'recipient_id' => $request->recipient_id,
           'email' => $request->email,
           'nCabezal' => $request->nCabezal,
           'text' => $request->text, 
        ]);


        // dd($mensaje);

        $recipient_id = User::find($request->recipient_id);

        // dd($recipient_id);

        $recipient_id->notify(new Msmenviado($mensaje));

        return back()->with('flash','Tu mensaje fue enviado');

    }


}
