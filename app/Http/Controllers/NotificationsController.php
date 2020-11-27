<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NotificationsController extends Controller
{
    public function read($id)
    {
        DatabaseNotification::findorFail($id)->markAsRead();

        return back()->with('flash','Notificacion marcada como leida');
    }


    
    public function destroy($id)
    {
        DatabaseNotification::find($id)->delete();

        return back()->with('flash','Notificacion eliminada');
    }


}
