@extends('layouts.master')

@section('content')


<div class="">
    <div class="box">
      <center class="mt-3">
      <div class="box-header">
        <h1 class="box-title" style="font-family: 'Anton', sans-serif;">Editar mi perfil</h1>
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
                  <img style="width: 70px" src="{{ asset('/storage/imagesUser/'.Auth::user()->image) }}" alt="">
                </td>
                   
                <td>  
                  <button class="btn btn-success" data-userid="{{$user->id}}" data-toggle="modal" data-target="#editUser">Cambiar imagen</button>
                </td>
     
              </tr>

            @endforeach
          
          </tbody>

        </table>        
      </div>

      {{-- <center>
        <div class="form-group">
          <img src="images/users.png" style="height:250px; width:400px">
        </div>
      </center>     --}}

    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Agregar Imagen de perfil</h4>
      </div>
      <form action="{{route('miperfil.update','test')}}" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="user_id" id="user_id" value="">
            @include('admin.users.partials.form')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Agregar imagen</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection()