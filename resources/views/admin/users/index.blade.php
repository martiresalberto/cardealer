@extends('layouts.master')

@section('content')

  <div class="">
    <div class="box">
      <center class="mt-3">
      <div class="box-header">
        <h1 class="box-title" style="font-family: 'Anton', sans-serif;">Usuarios de la pagina</h1>
      </div>
      </center> 
            
      <div class="box-body">
        <table class="table table-responsive table-dark">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>mail</th>
              <th>Role</th>
              <th>Imagen</th>

            </tr>
            
          </thead>

          <tbody>

            @foreach($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>
                  <img style="width: 70px" src="{{ asset('/storage/imagesUser/'.$user->image) }}" alt="">
                </td>
                  
            @endforeach
          </tbody>

        </table>        
      </div>

    </div>
  </div>


@endsection