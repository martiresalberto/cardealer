<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Role;

class EjemploController extends Controller
{
    public function index()
    {
        $role = Role::with('user')->get();

        // dd($role);

        return view('ejemplo',compact('role'));
    }


    public function upload(Request $request)
    {
        // return $request->all();

        if ($request->hasFile('file')) {

            foreach ($request->file as $file) {

                $filename = $file->getClientOriginalName();

                $file->storeAs('public/upload', $filename);

                $fileModel = new File;

                $fileModel->url = $filename;

                $fileModel->save();
            }
        }
    }
}
