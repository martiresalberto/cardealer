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