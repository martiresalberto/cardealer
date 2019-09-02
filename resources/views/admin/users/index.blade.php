@extends('layouts.master')

@section('content')


  <div class="">
    <div class="box">
      <center>
      <div class="box-header">
        <h3 class="box-title">Usuarios</h3>
      </div>
      </center> 
    

         <!-- Button trigger modal -->
      <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#usuario">
        Add New
      </button>

      <div class="box-body">
        <table class="table table-responsive table-dark">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>mail</th>
              <th>Role</th>
              <th>edit</th>
              <th>delete</th>

            </tr>
            
          </thead>

          <tbody>

            @foreach($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                   
                <td>  
                  <button class="btn btn-success" data-name="{{$user->name}}" data-mail="{{$user->mail }}" data-toggle="modal" data-target="#editUser">Edit</button>
                </td>
                <td>
                  <button class="btn btn-danger" data-userid={{$user->id}} data-toggle="modal" data-target="#deleteUser">Delete</button>
                </td>
     
              </tr>

            @endforeach
          </tbody>


        </table>        
      </div>

    </div>
  </div>

  
  <center>
    <div class="form-group">
      <img src="images/users.png" style="height:450px; width:750px">
    </div>
  </center>

 
<!-- Modal -->
<div class="modal fade" id="usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">New User</h4>
      </div>
      <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
        <div class="modal-body">
        
         @include('admin.users.partials.form')
        
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
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Edit Agente</h4>
      </div>
      <form action="{{route('users.update','test')}}" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="user_id" id="user_id" value="">
            @include('admin.users.partials.form')
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
<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('users.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="user_id" id="user_id" value="">

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