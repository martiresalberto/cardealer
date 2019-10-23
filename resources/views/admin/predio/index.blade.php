@extends('layouts.master')

@section('content')


  <div class="">
   
    <div class="box">
     
      <center class="mt-3">
      <div class="box-header">
        <h1 class="box-title" style="font-family: 'Anton', sans-serif;">Predio</h1>
      </div>
      </center> 
    
         <center>
          <div class="form-group">
            <img src="images/cars2.png" style="height:250px; width:400px">
          </div>
        </center>


         <!-- Button trigger modal -->
      <button type="button" class="btn btn-warning mb-2" data-toggle="modal" data-target="#Publicar">
      <i class="fas fa-camera fa-2x"></i>
       Publicar
      </button>

      <div class="box-body">
        <table class="table table-responsive table-dark">
          <thead>
            <tr>
              <th>Categoria</th>
              <th>Usuario</th>
              <th>titulo</th>
              <th>precio</th>
              <th>modelo</th>
              <th>km</th>
              <th>descripcion</th>
              <th>Condicion</th>
              <th>ubication</th>
              <th>Imagen</th>
              <th>edit</th>
              <th>delete</th>

            </tr>
            
          </thead>

          <tbody>

            {{-- @foreach($cabezals as $cab)
              <tr>
                <td>{{$cab->category->title}}</td>
                <td>{{$cab->agent->name_agente}}</td>
                <td>{{$cab->name_marca}}</td>
                <td>{{$cab->modelo}}</td>
                <td>{{$cab->type_motor}}</td>
                <td>{{$cab->type_camarote}}</td>
                <td>{{$cab->type_caja}}</td>
                <td>{{$cab->type_llantas}}</td>
                <td>{{$cab->type_freno}}</td>
                <td>{{$cab->color}}</td>
                <td>{{$cab->type_ejes}}</td>
                <td>{{$cab->ubication}}</td>
                <td>{{$cab->price}}</td>
                <td>{{$cab->state_cabezal }}</td>
                <td><img width="70px" src="{{ Storage::url($cab->imgCabezal) }}" alt=""/></td>
                <td>
                   @if($cab->user_id)
                  {{$cab->user->name}}
                   @endif
                </td>
                   
                <td>  
                  <button class="btn btn-info" data-marca="{{$cab->name_marca}}" data-modelo="{{$cab->modelo}}" data-motor="{{$cab->type_motor}}" data-camarote="{{$cab->type_camarote}}" data-caja="{{$cab->type_caja}}" data-llantas="{{$cab->type_llantas}}" data-freno="{{$cab->type_freno}}" data-color="{{$cab->color}}" data-ejes="{{$cab->type_ejes}}" data-ubication="{{$cab->ubication}}" data-price="{{$cab->price}}" data-statecab="{{$cab->state_cabezal}}" data-cabid={{$cab->id}} data-toggle="modal" data-target="#editCabezal">Edit</button>
                </td>
                <td>
                  <button class="btn btn-danger" data-cabid={{$cab->id}} data-toggle="modal" data-target="#deleteCabezal">Delete</button>
                </td>
     
              </tr>

            @endforeach --}}
          </tbody>


        </table>        
      </div>

    </div>
  </div>
 
<!-- Modal -->
<div class="modal fade" id="Publicar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Nuevo anuncio</h4>
      </div>
      <form action="{{route('predio.store')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
        <div class="modal-body">
            @include('admin.predio.partials.form')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Crear</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editCabezal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Edit Anuncio</h4>
      </div>
      <form action="{{route('predio.update','test')}}" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="cabezal_id" id="cab_id" value="">
            @include('admin.predio.partials.form')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteCabezal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center" id="myModalLabel">Eliminar</h4>
      </div>
      <form action="{{route('predio.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Estas seguro de eliminar el anuncio?
        </p>
            <input type="hidden" name="cabezal_id" id="cab_id" value="">

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