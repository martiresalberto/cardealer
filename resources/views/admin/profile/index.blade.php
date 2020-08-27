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
              <th>Editar</th>
              <th>Eliminar</th>

            </tr>
            
          </thead>

          <tbody>

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <img style="width: 70px" src="" alt="">
                </td>

                   
                <td>  
                  <button class="btn btn-success" data-name="" data-email="" data-userid="" data-toggle="modal" data-target="#editUser">Editar</button>
                </td>
                <td>
                  <button class="btn btn-danger" data-userid="" data-toggle="modal" data-target="#deleteUser">Eliminar</button>
                </td>
     
              </tr>

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
        
        <h4 class="modal-title" id="myModalLabel">Agregar Imagen de usuario</h4>
      </div>
      <form action="{{route('miperfil.update','test')}}" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="miperfil_id" id="miperfil_id" value="">
            @include('admin.profile.partials.form')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Agregar imagen</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('miperfil.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="miperfil_id" id="miperfil_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
          <button type="submit" class="btn btn-warning">Si, Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection