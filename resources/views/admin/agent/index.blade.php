@extends('layouts.master')

@section('content')


  <div class="">
    <div class="box">
      <center>
      <div class="box-header">
        <h3 class="box-title">Agentes</h3>
      </div>
      </center> 
    

         <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#agente">
        Add New
      </button>

      <div class="box-body">
        <table class="table table-responsive table-dark">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>urlFace</th>
              <th>urlTwuiter</th>
              <th>UrlGoogle</th>
              <th>Imagen</th>
              <th>edit</th>
              <th>delete</th>

            </tr>
            
          </thead>

          <tbody>

            @foreach($agents as $age)
              <tr>
                <td>{{$age->name_agente}}</td>
                <td>{{$age->description}}</td>
                <td>{{$age->urlFace}}</td>
                <td>{{$age->urlTwuiter}}</td>
                <td>{{$age->urlGoogle}}</td>
                <td><img width="70px" src="{{ Storage::url($age->imgAgent) }}" alt=""/></td>
                   
                <td>  
                  <button class="btn btn-info" data-name="{{$age->name_agente}}" data-description="{{$age->description }}" data-url_face="{{$age->urlFace}}" data-url_twuiter="{{$age->urlTwuiter}}" data-url_google="{{$age->urlGoogle}}" data-ageid={{$age->id}} data-toggle="modal" data-target="#editAgent">Edit</button>
                </td>
                <td>
                  <button class="btn btn-danger" data-ageid={{$age->id}} data-toggle="modal" data-target="#deleteAgent">Delete</button>
                </td>
     
              </tr>

            @endforeach
          </tbody>


        </table>        
      </div>

    </div>
  </div>



 
<!-- Modal -->
<div class="modal fade" id="agente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">New Cabezal</h4>
      </div>
      <form action="{{route('agent.store')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
        <div class="modal-body">
        @include('admin.agent.partials.form')
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
<div class="modal fade" id="editAgent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Edit Agente</h4>
      </div>
      <form action="{{route('agent.update','test')}}" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="agent_id" id="age_id" value="">
            @include('admin.agent.partials.form')
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
<div class="modal fade" id="deleteAgent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('agent.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="agent_id" id="age_id" value="">

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