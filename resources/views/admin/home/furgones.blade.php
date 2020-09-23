@extends('layouts.master')

@section('content')



<div class="">
    <div class="box">
      <center class="mt-3">
      <div class="box-header">
        <h1 class="box-title" style="font-family: 'Anton', sans-serif;">Furgones publicados</h1>
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

                
            <tr>
              <td></td>
              <td></td>
              <td>  
                <button class="btn btn-danger"  data-toggle="modal" data-target="#ver">Ver</button>
              </td>
            </tr>
            
          
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
          
          <h4 class="modal-title" id="myModalLabel">{{ $predios->titulo }}</h4>
        </div>

          <div class="modal-body">

            <div class="row">

            <div class="col-md-6">
                  <img src="{{ asset('storage/predio/thumbnail/'.$predios->files[0]->url) }}" height="250px" alt="">
            </div>

            <div class="col-md-6">
              
              <ul>
                <span> MARCA</span>
                <li>{{ $predios->titulo }}</li>
                <span>MODELO</span>
                <li>{{ $predios->modelo }}</li>
                <span>MOTOR</span>
                <li>Cummins ISX</li>
                <span>PRECIO</span>
                <li>{{ $predios->precio }}</li>
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