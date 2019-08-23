@foreach($cabezales as $cabezal)  

<!-- Modal -->
<div class="modal fade" id="cabezales{{ $cabezal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cabezales Recientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<div class="container-fluid">
            <!-- Portfolio Item Row -->
         

              <div class="col-md-8" style="margin-top: 70px;">

                <img class="img-fluid" src="{{ Storage::url($cabezal->imgCabezal) }}" width="350" height="330" alt="">
                
                <div class="form-group" style="margin-top: 20px; margin-bottom: 30px;">
                </div>

              </div>



              <div class="col-md-4">
                <h3 class="my-3 text-center"> Description </h3>
                    
                <p>
                    <ul>
                        <li>Marca     : {{ $cabezal->name_marca }}</li>
                    </ul>    
                    <ul>    
                        <li>Modelo    : {{ $cabezal->modelo }}</li>
                    </ul>
                    <ul>     
                        <li>freno     : {{ $cabezal->type_freno }}</li>
                    </ul>    
                    <ul>     
                        <li>Motor     : {{ $cabezal->type_motor }}</li>
                    </ul>    
                     <ul>    
                        <li>Caja      : {{ $cabezal->type_caja }}</li>
                     </ul>
                     <ul>   
                        <li>Camarote  : {{ $cabezal->type_camarote }}</li>
                     </ul>
                     <ul>    
                        <li>color     : {{ $cabezal->color }}</li>
                     </ul>
                     <ul>    
                        <li>ejes      : {{ $cabezal->type_ejes }}</li>
                     </ul>
                     <ul>    
                        <li>Estado    : {{ $cabezal->state_cabezal }}</li>
                     </ul>
                     
                </p>

              
              </div>
             
              

              <div class="col-md-12">

                  <div class="col-md-2 col-sm-1 mb-4">
                    <a href="#">
                          <img class="img-fluid" src="http://placehold.it/100x50" alt="">
                        </a>
                  </div>

                  <div class="col-md-2 col-sm-1 mb-4">
                    <a href="#">
                          <img class="img-fluid" src="http://placehold.it/100x50" alt="">
                        </a>
                  </div>

                  <div class="col-md-2 col-sm-1 mb-4">
                    <a href="#">
                          <img class="img-fluid" src="http://placehold.it/100x50" alt="">
                        </a>
                  </div>

                  <div class="col-md-2 col-sm-1 mb-4">
                    <a href="#">
                          <img class="img-fluid" src="http://placehold.it/100x50" alt="">
                        </a>
                  </div>

                  <div class="col-md-2 col-sm-1 mb-4">
                    <a href="#">
                          <img class="img-fluid" src="http://placehold.it/100x50" alt="">
                        </a>
                  </div>

                  <div class="col-md-2 col-sm-1 mb-4">
                    <a href="#">
                          <img class="img-fluid" src="http://placehold.it/100x50" alt="">
                        </a>
                  </div>



               </div> 

          
             <!-- /.row -->
             </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endforeach