<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;
use App\User;

class MensajesController extends Controller
{
   
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct()
    {
        $this->middleware(['auth', 'roles:admin']);
    }

    public function mostrarmensajeadmin()
    {

        return view('admin.mensajes.index',[
        
            'unreadNotifications' => auth()->user()->unreadNotifications,
        
            'readNotifications' => auth()->user()->readNotifications
        
        ]);

    }

    public function show($id)
    {
        
        $mensaje = Mensaje::findOrFail($id);

        return view('admin.mensajes.show',compact('mensaje'));
    
    }


}
