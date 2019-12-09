
<!-- Modal -->
<div class="modal fade" id="editCabezal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              
              <h4 class="modal-title" id="myModalLabel">Edit Anuncio</h4>
            </div>
            <form action="{{route('predio.update','test')}}" method="post" enctype="multipart/form-data">
                {{method_field('patch')}}
                {{csrf_field()}}
              <div class="modal-body">
                  <input type="hidden" name="predio_id" id="pre_id" value="">


            @foreach($users as $user)

            <div class="form-row">
                
                <div class="form-group col-md-6">
                  <label for="">Nombre de usuario</label>
                  <input type="text" class="form-control" value="{{ $user->name }}"> 
                </div>
                
                <div class="form-group col-md-6">
                  <label for="usuario">Tipo de usuario</label>
                  <input type="text" name="usuario" id="usuario" class="form-control" value="{{ $user->role->name }}"> 
                </div>

            </div>

            @endforeach

            <div  class="form-row">

            <div class="form-group col-md-6">
              <label for="categoria">Categoria</label>
              <select class="form-control" name="categoria">
                @foreach($categories as $cat)
                  <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach  
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="condicion">Condicion</label>
              <select class="form-control" name="condicion">
                @foreach($condicion as $con)
                  <option name="condicion" id="condicion" value="{{ $con->id }}">{{ $con->titulo }}</option>
                @endforeach  
              </select>
            </div>


            </div>

            <div class="form-row">

            <div class="form-group col-md-6">
              <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" class="form-control"> 
            </div>  

            <div class="form-group col-md-6">
              <label for="precio">precio</label>
                <input type="text" name="precio" id="precio" class="form-control"> 
            </div>  

            </div>

            <div class="form-row">

            <div class="form-group col-md-6">
              <label for="modelo">modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control"> 
            </div>  

            <div class="form-group col-md-6">
              <label for="kilometraje">kilometraje</label>
                <input type="text" name="km" id="km" class="form-control"> 
            </div>  


            </div>

            <div class="form-group">
              <label for="ubicacion">ubicacion</label>
                <input type="text" name="ubicacion" id="ubicacion" class="form-control"> 
            </div>  

            <div class="form-group">
              <label for="descripcion">descripcion</label>
                <textarea name="descripcioncompleta" id="descripcioncompleta" class="form-control"></textarea> 
            </div>  

            <div class="form-group">
              <label for="image">imgTrans</label>
              <input type="file" name="image"> 
            </div>  


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>
