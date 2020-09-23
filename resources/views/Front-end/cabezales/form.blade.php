{{-- @foreach($predios as $pre ) --}}
  <!-- Modal -->
  <div class="modal fade" id="predio{{$predio->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div> --}}
        <div class="modal-body">
          
          <!--Main layout-->
            <div class="container">
    
                <!--Grid row-->
             <div class="row mt-5">
                <!--Grid column-->
                <div class="col-md-5">
                 <img src="" width="400px" class="img-fluid" alt="">
                </div>
    
                <div class="col-md-2">
                  <div class="col">
                    <img src="" width="80px" class="img-fluid" alt="">
                  </div>
                  <br>
                  <div class="col">
                    <img src="" width="80px" class="img-fluid" alt="">
                  </div>
                  <br>
                  <div class="col">
                    <img src="" width="80px" class="img-fluid" alt="">
                  </div>
                  <br>
                  <div class="col">
                    <img src="" width="80px" class="img-fluid" alt="">
                  </div>
                  <br>
                </div>  ,
                <!--Grid column-->
                <div class="col-md-3">

                  <span class="badge badge-pill badge-secondary">
                    {{$predio->condicion}}
                  </span>

                   <h4>
                       {{$predio->titulo}}
                    </h4>
                
                    <span>Descripcion</span>
                    <br>
                    <p>
                       {{$predio->descripcioncompleta}}
                    </p>
                
                    <p>
                      <span>Q{{$predio->precio}}</span>
                    </p>
                
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!--Main layout-->
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Enviar mensaje</button>
        </div>
      </div>
    </div>
  </div>

{{-- @endforeach   --}}