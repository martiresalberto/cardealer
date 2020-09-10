@extends('layouts.master')

@section('content')


  <div class="">
    <div class="box">
      <center class="mt-3">
      <div class="box-header">
        <h1 class="box-title" style="font-family: 'Anton', sans-serif;">Categorias</h1>
      </div>
      </center> 

       <!-- Button trigger modal -->
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
        Crear categoria
      </button>


      <div class="box-body mt-1">
        <table class="table table-responsive table-dark">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
            
          </thead>

          <tbody>

            @foreach($categories as $cat)
              <tr>
                <td>{{$cat->title}}</td>

                <td>
                  <button class="btn btn-info" data-mytitle="{{$cat->title}}" data-mydescription="{{$cat->description}}" data-catid={{$cat->id}} data-toggle="modal" data-target="#edit">Edit</button>
                </td>
                <td>  
                  <button class="btn btn-danger" data-catid={{$cat->id}} data-toggle="modal" data-target="#delete">Delete</button>
                </td>
              </tr>

            @endforeach
          </tbody>


        </table>        
      </div>


    </div>

  </div>
   
 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Nueva categoria</h4>
      </div>
      <form action="{{route('category.store')}}" method="post">
          {{csrf_field()}}
        <div class="modal-body">
        @include('admin.category.partials.form')
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
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Editar Categoria</h4>
      </div>
      <form action="{{route('category.update','test')}}" method="post">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="category_id" id="cat_id" value="">
        @include('admin.category.partials.form')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center" id="myModalLabel">Borrar categoria</h4>
      </div>
      <form action="{{route('category.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          estas seguro de borrar esta categoria ?
        </p>
            <input type="hidden" name="category_id" id="cat_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-warning">Si , Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection