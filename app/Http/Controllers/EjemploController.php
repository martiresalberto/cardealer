<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class EjemploController extends Controller
{
    public function index()
    {
        return view('ejemplo');
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
