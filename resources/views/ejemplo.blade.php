@extends('layouts.app')


@section('content')

<div class="container mt-5 mb-5">

    
    <div class="shadow text-center">
        <h2>Subir varias imagenes</h2><br>

    <form action="{{ route('upload.ejemplo') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-grouo">
            <input type="file" name="file">
            <input type="submit" class="btn btn-info"> 
         </div><br>
    </form>
    
    </div>    
     


</div>



@foreach ($role as $rol)

<div class="form-group">

    <h2>{{ $rol->user->first()->role_id }}</h2>
    
</div>

@endforeach

@endsection