@extends('front-end.template')


@section('content')
    

<section class="block">
    <div class="container">

        <div class="heading4">
            <h2>Mensajes recibidos</h2>
            <h4>Que cabezal buscas?</h4>
        </div>

      <div class="container">
        <div class="row">
               <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Enviar mensaje</div>

                     <div class="panel-body">

                       <div class="form-group">
                           <select class="form-control">
                               <option value="">Seleciona el usuario</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id}}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                       </div>

                       <div class="form-group">
                           <textarea class="form-control" placeholder=""></textarea>
                       </div>

                       <div class="form-group">
                           <button class="btn btn-primary">Enviar</button>
                       </div>

                     </div>


                </div>

               </div>
        </div>    
      </div>  
        

    </div>
</section>


@endsection()