@extends('layouts.master')

@section('content')


  <div class="">
   
    <div class="box">
     
      <center>
      <div class="box-header">
        <h3 class="box-title">Predio</h3>
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
              <th>Agente</th>
              <th>name_marca</th>
              <th>modelo</th>
              <th>type_motor</th>
              <th>type_camarote</th>
              <th>type_caja</th>
              <th>type_llantas</th>
              <th>type_freno</th>
              <th>color</th>
              <th>type_ejes</th>
              <th>ubication</th>
              <th>price</th>
              <th>Estado</th>
              <th>Imagen</th>
              <th>User</th>
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

  <center>
    <div class="form-group">
      <img src="images/cars2.png" style="height:450px; width:750px">
    </div>
  </center>

 
<!-- Modal -->
<div class="modal fade" id="Publicar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">New Cabezal</h4>
      </div>
      <form action="{{route('predio.store')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">.col-md-4</div>
              <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
            </div>
            <div class="row">
              <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
              <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
            </div>
            <div class="row">
              <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
            </div>
            <div class="row">
              <div class="col-sm-9">
                Level 1: .col-sm-9
                <div class="row">
                  <div class="col-8 col-sm-6">
                    Level 2: .col-8 .col-sm-6
                  </div>
                  <div class="col-4 col-sm-6">
                    Level 2: .col-4 .col-sm-6
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editCabezal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Edit Cabezal</h4>
      </div>
      <form action="{{route('predio.update','test')}}" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="cabezal_id" id="cab_id" value="">
            @include('admin.cabezal.partials.form')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
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
        
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('predio.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="cabezal_id" id="cab_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button type="submit" class="btn btn-warning">Yes, Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection