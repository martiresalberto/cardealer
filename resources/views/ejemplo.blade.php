@extends('layouts.app')


@section('content')

<div class="container mt-5 mb-5">

    
    <div class="shadow text-center">
        <h2>Subir varias imagenes</h2><br>

    <form action="{{ route('upload.ejemplo') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-grouo">
            <input type="file" name="file[]" multiple>
            <input type="submit" class="btn btn-info"> 
         </div><br>
    </form>
    
    </div>    
     


</div>

@endsection