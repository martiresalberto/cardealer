@extends('layouts.master')

@section('content')



<div class="">
    <div class="box">
      <center class="mt-3">
      <div class="box-header">
        <h1 class="box-title" style="font-family: 'Anton', sans-serif;">Carros publicados</h1>
      </div>
      </center> 

       {{--  <!-- Button trigger modal -->
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
        Crear categoria
      </button>  --}}


      <div class="box-body mt-1">
        <table class="table table-responsive table-dark">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Accion</th>
              <th>Modelo</th>
            </tr>
            
          </thead>

          <tbody>

           @foreach ($predios as $predio)
               
           <tr>
             <td>{{ $predio->titulo }}</td>
             <td>  
               <button class="btn btn-danger"  data-toggle="modal" data-target="#ver">Ver</button>
              </td>
            </tr>
            
            @endforeach     
          
          </tbody>


        </table>        
      </div>


    </div>

  </div>
   
 
  <!-- Modal -->
  <div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title" id="myModalLabel"></h4>
        </div>

          <div class="modal-body">

            <div class="row">

            <div class="col-md-6">
                  <img src="" height="250px" alt="">
            </div>

            <div class="col-md-6">
              
              <ul>
                <span> MARCA</span>
                <li>Peterbelt</li>
                <span>MODELO</span>
                <li>3324</li>
                <span>MOTOR</span>
                <li>Cummins ISX</li>
                <span>PRECIO</span>
                <li>vdgjfdgj</li>
              </ul>

            </div>

          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
          </div>

      </div>
    </div>
  </div>
  

@endsection()