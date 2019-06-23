@extends('layouts.master')


@section('content')


<h3>All categories</h3>

<div class="card-body table-responsive p-0">
        <table class="table table-hover">
        
          <tbody>
          	<tr>
            <th>Title</th>
            <th>Descripcion</th>
            <th>Editar</th>
          </tr>
          
          @foreach($categories as $cat)
          <tr>
            <td>{{ $cat->title}}</td>
            <td>{{ $cat->description }}</td>
          <td>
              
              <button class="btn btn-info" data-mytitle="{{$cat->title}}" data-mydescription="{{$cat->description}}" data-toggle="modal" data-target="#edit">Edit</button>
              
              
              <a href="#">
                  <i class="fas fa-trash red"></i>
              </a>
          </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
      </div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('category.store') }}" method="post">
    
        {{ csrf_field() }}

      <div class="modal-body">
        
        @include('admin.partials.form')

      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    
      </form>

    </div>
  
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1"aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('category.update','test') }}" method="post">
    
        {{ csrf_field() }}

      <div class="modal-body">
        
        @include('admin.partials.form')
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    
      </form>

    </div>
  
  </div>
</div>

@endsection

