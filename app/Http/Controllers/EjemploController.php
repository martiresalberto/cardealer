<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Video;  

class EjemploController extends Controller
{
    public function index()
    {
        return view('admin.ejemplo.index');
    }


    public function upload(Request $request)
    {

                 $file = $request->file('file');

                 //get filename with extension
                 $filenamewithextension = $file->getClientMimeType();

                 //get filename without extension
                 $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
     
                 //get file extension
                 $extension = $file->getClientOriginalExtension();
     
                 //filename to store
                 $filenametostore = $filename.'_'.time().'.'.$extension;
                 
                 
                //  dd($filenametostore);
                 
                 Storage::put('public/video/'. $filenametostore, fopen($file, 'r+'));
                

                 Video::create([
                    'predio_id' => $predio->id,
                    'urlVideo' => $filenametostore
                ]);

                 return back();
}



}
