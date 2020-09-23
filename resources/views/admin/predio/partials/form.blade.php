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
              <select class="form-control" name="category_id">
                <option value="">Selecciona la categoria</option>
                @foreach($categories as $cat)
                <option name="category_id" id="category_id" value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach  
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="condicion">Condicion</label>
              <select class="form-control" name="condicion">
                <option value="">Selecciona una condicion</option>
                @foreach($condicion as $con)
                  <option name="condicion" id="condicion" value="{{ $con->titulo }}">{{ $con->titulo }}</option>
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
              <label for="url">imagenes</label>
              <input type="file" name="url[]" multiple="multiple"> 
            </div>  

            


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Crear</button>
          </div>
      </form>
    </div>
  </div>
</div>