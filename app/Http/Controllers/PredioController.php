<?php

namespace App\Http\Controllers;

use App\File;
use App\User;
use App\Video;
use App\Modelo;
use App\Predio;
use App\Category;
use App\Condicion;
use App\Ubicacion;
use Illuminate\Http\Request;
use Image; //Intervention Image
use Illuminate\Support\Facades\Storage;

class PredioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $predio = Predio::all(['id', 'titulo',
        'precio', 'modelo_id', 'km',
        'descripcioncompleta', 'ubicacion_id',
        'condicion_id', 'user_id','category_id']);

        $ubicacion = Ubicacion::all(['id','nombre']);

        $condicion = Condicion::all(['id', 'nombre']);

        $categories = Category::all(['id', 'nombre']);

        $modelos = Modelo::all(['id', 'nombre']);

        $users = User::where('id', '=', auth()->id())->get();

        // dd($predio);

        return view('admin.predio.index', compact('predio','modelos','categories', 'users', 'condicion','ubicacion'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validacion
        // $data = $request->validate([
        //    'titulo' => 'required',
        //    'precio' => 'required',
        //    'descripcioncompleta' => 'required',
        //    'user_id' => 'required',
        //    'condicion_id' => 'required',
        //    'ubicacion_id' => 'required',
        //    'modelo_id' => 'required',
        // ]);

        // dd($request->all());

            $predio = auth()->user()->predios()->create([
                'titulo' => $request['titulo'],
                'precio' => $request['precio'],
                'km' => $request['km'],
                'descripcioncompleta' => $request['descripcioncompleta'],
                'category_id' => $request['categoria'],
                'ubicacion_id' => $request['ubicacion'],
                'condicion_id' => $request['condicion'],
                'modelo_id' => $request['modelo'],

            ]);


         foreach ($request->url as $file) {

                    //get filename with extension
            $filenamewithextension = $file->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $file->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            Storage::put('public/predio/'. $filenametostore, fopen($file, 'r+'));

            Storage::put('public/predio/thumbnail/'. $filenametostore, fopen($file, 'r+'));

             //Resize image here
            $thumbnailpath = public_path('storage/predio/thumbnail/'.$filenametostore);

            $img = Image::make($thumbnailpath)->resize(700, 500)->save($thumbnailpath);

            $img->save($thumbnailpath);

            File::create([
                'predio_id' => $predio->id,
                'url' => $filenametostore
            ]);
        }

        //Ruta para subir video
        $filevideo = $request->file('video');

        //get filename with extension
        $filenamewithextensionvideo = $filevideo->getClientMimeType();

        //get filename without extension
        $filename = pathinfo($filenamewithextensionvideo, PATHINFO_FILENAME);

        //get file extension
        $extensionvideo = $filevideo->getClientOriginalExtension();

        //filename to store
        $filenametostorevideo = $filename.'_'.time().'.'.$extensionvideo;


       //  dd($filenametostore);

        Storage::put('public/video/'. $filenametostorevideo, fopen($filevideo, 'r+'));


        Video::create([
           'predio_id' => $predio->id,
           'urlVideo' => $filenametostorevideo
       ]);


       return back()->with('estado','La informacion se envio correctamente');


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
        $predio = Predio::findOrFail($request->predio_id);

        $predio->update($request->all());

        //  dd($predio);

        $predio->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $predio = Predio::findOrFail($request->predio_id);

        $predio->delete();

        return back();
    }
}
