@extends('front-end.template')


@section('content')

    {{--  Seccion de CABEZALES LISTOS PARA TRABAJAR  --}}

    <section class="block">
        <div class="container">
            <div class="heading4">
                <h2>CABEZALES RECIENTE INGRESO</h2>
                <span><h4>Los cabeales reciente ingreso  entraron en un rango de 6 meses y no han trabajado en Guatemala estan listos para trabajar</h4></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="vehiculs-sec">
                        <div class="row">

                            @foreach ($predios as $predio)

                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="{{ asset('storage/predio/'.$predio->files[0]->url) }}" alt="" />
                                            <span class="spn-status"> {{ $predio->condicion }} </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                                            <div class="user-preview">
                                                <a class="col" href="">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/4.png"
                                                        title="{{ $predio->usuario }}">
                                                </a>
                                            </div>
                                            <a class="proeprty-sh-more"
                                                href="{{ route('detalle-cabezal-reciente-ingreso', $predio->id) }}"><i
                                                    class="fa fa-angle-double-right">
                                                </i><i class="fa fa-angle-double-right"> </i></a>
                                            <p class="car-info-smal">

                                                Registration {{ $predio->created_at }}<br>
                                                {{ $predio->km }}
                                            </p>
                                        </div>
                                        <h3><a href="vehicul.html" title="">{{ $predio->titulo }}</a></h3>
                                        <span class="price">${{ $predio->precio }}</span>

                                    </div><!-- prop Box -->
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection()
