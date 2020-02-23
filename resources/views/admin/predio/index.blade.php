@extends('layouts.master')

@section('content')


  <div class="">
   
    <div class="box">
     
      <center class="mt-3">
      <div class="box-header">
        <h1 class="box-title" style="font-family: 'Anton', sans-serif;">Predio</h1>
      </div>
      </center> 
    
         {{-- <center>
          <div class="form-group">
            <img src="images/cars2.png" style="height:250px; width:400px">
          </div>
        </center> --}}


         <!-- Button trigger modal -->
      <button type="button" class="btn btn-warning mb-2" data-toggle="modal" data-target="#Publicar">
      <i class="fas fa-camera fa-2x"></i>
       Publicar
      </button>

      <div class="box-body">
        <table class="table table-responsive table-dark">
          <thead>
            <tr>
              <th>usuario</th>      
              <th>titulo</th>
              <th>categoria</th>
              <th>precio</th>
              <th>modelo</th>
              <th>km</th>
              <th>imagen</th>
              <th>edit</th>
              <th>delete</th>

            </tr>
            
          </thead>

          <tbody>

            @foreach($predio as $pre)
              <tr>
                <td>
                   {{-- @if($pre->user_id)
                  {{$pre->user->name}}
                   @endif --}}
                   {{$pre->usuario}}
                </td>
                <td>{{$pre->titulo}}</td>
                <td>{{ $pre->categoria ?? 'categoria not found' }}</td>
                <td>{{$pre->precio}}</td>
                <td>{{$pre->modelo}}</td>
                <td>{{$pre->km}}</td>
                <td>
                  <img width="70px" src="{{ Storage::url($pre->files[0]->url) }}" alt=""/>
                </td>
                 
                <td>  
                  <button class="btn btn-info" 
                  data-titulo="{{$pre->titulo}}" 
                  data-precio="{{$pre->precio}}" 
                  data-modelo="{{$pre->modelo}}" 
                  data-km="{{$pre->km}}" 
                  data-descripcioncompleta="{{$pre->descripcioncompleta}}" 
                  data-estado="{{$pre->estado}}" 
                  data-ubicacion="{{$pre->ubicacion}}" 
                  data-condicion="{{$pre->condicion}}" 
                  data-image="{{$pre->image}}"
                  data-preid={{$pre->id}} 
                  data-toggle="modal" 
                  data-target="#editCabezal">Edit</button>
                </td>
                <td>
                  <button class="btn btn-danger" 
                  data-preid={{$pre->id}} 
                  data-toggle="modal" 
                  data-target="#deleteCabezal">Delete</button>
                </td>
     
              </tr>

            @endforeach
          </tbody>


        </table>        
      </div>

    </div>
  </div>
 



@include('admin.predio.partials.form')
        
@include('admin.predio.partials.editform')

@include('admin.predio.partials.deleteform')


@endsection