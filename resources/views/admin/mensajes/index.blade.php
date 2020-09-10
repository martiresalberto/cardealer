@extends('layouts.master')

@section('content')


    <div class="">
        <div class="box">
            <center class="mt-3">
                <div class="box-header">
                    <h1 class="box-title" style="font-family: 'Anton', sans-serif;">Mis mensajes</h1>
                </div>
            </center>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-responsive table-dark">
                            <thead>
                                <tr>
                                    <th>Mensaje no leidos</th>
                                    <th>Accion</th>
                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($unreadNotifications as $unreadNotifications)

                                    <tr>
                                        <td><a href="{{ $unreadNotifications->data['link'] }}">{{ $unreadNotifications->data['text'] }}</a></td>
                                         <form method="POST" action="{{ route('notifications.read',$unreadNotifications->id) }}">
                                             {{ method_field('PATCH') }}
                                             {{ csrf_field() }}
                                          <td><button class="btn btn-danger">X</button></td>
                                         </form>
                                    </tr>
                                    


                                @endforeach

                            </tbody>

                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-responsive table-dark">
                            <thead>
                                <tr>
                                    <th>Mensaje leidos</th>
                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($readNotifications as $readNotifications)

                                <tr>
                                    <td><a href="{{ $readNotifications->data['link'] }}">{{ $readNotifications->data['text'] }}</a></td>
                                    <form method="POST" action="{{ route('notifications.destroy',$readNotifications->id) }}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                     <td><button class="btn btn-danger">X</button></td>
                                    </form>
                                </tr>

                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            {{-- <center>
                <div class="form-group">
                    <img src="images/users.png" style="height:250px; width:400px">
                </div>
            </center> --}}

        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Agregar Imagen de perfil</h4>
                </div>
                <form action="{{ route('miperfil.update', 'test') }}" method="post" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="user_id" id="user_id" value="">
                        @include('admin.users.partials.form')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Agregar imagen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection()
