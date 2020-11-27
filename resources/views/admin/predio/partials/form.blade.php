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

            <div class="form-row">

                @foreach($users as $user)

                <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">

                @endforeach

            </div>

            <div class="form-group">
              <label for="titulo">Titulo Publicacion</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>

            <div class="form-row">

            <div class="form-group col-md-6">
                <label for="kilometraje">kilometraje</label>
                    <input type="text" name="km" id="km" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="precio">precio</label>
                  <input type="text" name="precio" id="precio" class="form-control">
            </div>

            </div>

            <div  class="form-row">

            <div class="form-group col-md-6">
                <label for="categoria">Categoria</label>
                <select class="form-control" name="categoria">
                <option value="">Selecciona la categoria</option>
                @foreach($categories as $categoria)
                <option name="categoria" id="categoria" value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="condicion">Condicion</label>
                <select class="form-control" name="condicion">
                <option value="">Selecciona una condicion</option>
                @foreach($condicion as $condicion)
                    <option name="condicion" id="condicion" value="{{ $condicion->id }}">{{ $condicion->nombre }}</option>
                @endforeach
                </select>
            </div>

            </div>

            <div class="form-row">

            <div class="form-group col-md-6">
                <label for="modelo">Modelo</label>
                <select class="form-control" name="modelo">
                <option value="">Selecciona una modelo</option>
                @foreach($modelos as $modelo)
                    <option name="modelo" id="modelo" value="{{ $modelo->id }}">{{ $modelo->nombre }}</option>
                @endforeach
                </select>
            </div>


            <div class="form-group col-md-6">
                <label for="ubicacion">ubicacion</label>
                <select class="form-control" name="ubicacion">
                <option value="">Selecciona una ubicacion</option>
                @foreach($ubicacion as $ubicacion)
                    <option name="ubicacion" id="ubicacion" value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>
                @endforeach
                </select>
            </div>

        </div>

            <div class="form-group">
              <label for="descripcion">descripcion</label>
                <textarea name="descripcioncompleta" id="descripcioncompleta" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label for="url">imagenes</label>
              <input type="file" name="url[]" multiple="multiple">
            </div>

            <div class="form-group">
              <label for="file">Video</label>
              <input type="file" name="video">
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
