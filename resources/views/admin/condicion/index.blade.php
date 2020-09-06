@extends('layouts.master')

@section('content')


    <div class="">
        <div class="box">
            <center class="mt-3">
                <div class="box-header">
                    <h1 class="box-title" style="font-family: 'Anton', sans-serif;">Condiciones</h1>
                </div>
            </center>

            <center>
                <div class="form-group">
                    <img src="images/category.png" style="height:250px; width:400px">
                </div>
            </center>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                Crear condicion
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

                        @foreach ($condicions as $con)
                            <tr>
                                <td>{{ $con->titulo }}</td>

                                <td>
                                    <button class="btn btn-info" data-mytitulo="{{ $con->titulo }}"
                                        data-conid={{ $con->id }} data-toggle="modal"
                                        data-target="#editCondicion">Edit</button>
                                </td>
                                <td>
                                    <button class="btn btn-danger" data-catid={{ $con->id }} data-toggle="modal"
                                        data-target="#deleteCondicion">Delete</button>
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

                    <h4 class="modal-title" id="myModalLabel">Nueva condicion</h4>
                </div>
                <form action="{{ route('condicion.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        @include('admin.condicion.partials.form')
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
    <div class="modal fade" id="editCondicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Editar condicion</h4>
                </div>
                <form action="{{ route('condicion.update', 'test') }}" method="post">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="condicion_id" id="con_id" value="">
                        @include('admin.condicion.partials.form')
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
    <div class="modal fade" id="deleteCondicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title text-center" id="myModalLabel">Borrar condicion</h4>
                </div>
                <form action="{{ route('condicion.destroy', 'test') }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p class="text-center">
                            estas seguro de borrar esta condicion ?
                        </p>
                        <input type="hidden" name="condicion_id" id="con_id" value="">

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
