@extends('layouts.master')

@section('content')


<div class="container mt-5 mb-5">

    
    <div class="shadow text-center">
        <h2>Subir Archivos</h2><br>

    <form action="{{ route('upload.ejemplo') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-grouo">
            <input type="file" name="file">
            <input type="submit" class="btn btn-info"> 
         </div><br>
    </form>
    
    </div>    
     


</div>

<div class="container">

    <video autoplay muted loop src="storage/video/mp4_1601141277.mp4" width="640" height="480"></video>
</div>


@endsection()