<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class MiperfilController extends Controller
{
    public function index()
    {

        // $users = User::all();

        $users = User::find(Auth::user()->id)->get();

        // $users = User::find(auth()->id())->get();

        // dd($users);

        return view('admin.miperfil.index',compact('users'));
    }
}
