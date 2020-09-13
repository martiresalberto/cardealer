@extends('front-end.template')


@section('head')

    @parent

    <link type="text/css" rel="stylesheet" href="{{ asset('css/lightslider.min.css') }}" />

@stop

@section('Script')

    @parent

    <script src="{{ asset('js/lightslider.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 6000,
                auto: false,
                loop: true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            "use strict";
            $(".related-vehiculs-items").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 4000,
                loop: true,
                dots: true,
                nav: false,
                marging: 30,
                items: 4,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            });
        });

    </script>

@stop

@section('content')

    <section class="block">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    {{-- Seccion de la galeria de imagenes --}}

                    <div class="row">
                        <div class="col-md-8 column">
                            <div class="single-post-sec">
                                <div class="blog-post vehicul-post">

                                    <div class="vehicul-gallery">
                                        <div class="light-slide-item">
                                            <div class="favorite-and-print">
                                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">

                                                    @foreach ($predio->files as $pre)
                                                        <li data-thumb="{{ asset('storage/predio/thumbnail/'.$pre->url) }}" alt="CarDealer">
                                                            <img src="{{ asset('storage/predio/thumbnail/'.$pre->url) }}" 
                                                            
                                                            alt="CarDealer" />
                                                        </li>
                                                    @endforeach

                                                

                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        {{--Section de informacion de Usuario--}}

                        @if (Route::has('login'))

                            @auth

                                <aside class="col-md-4 column">

                                    <div class="agent_bg_widget widget">


                                            <div class="agent_widget">
                                                <div class="agent_pic">

                                                        <img src="{{ asset('/storage/imagesUser/' . $predio->user->image) }}"
                                                            style="margin-left: 1rem;" width="50px" alt="imagen">

                                                    <h4>{{ $predio->user->name }}</h4>
                                                </div>
                                                <span>
                                                    <i class="fa fa-phone"> </i> +1 9090909090
                                                </span>
                                                <span>
                                                    <i class="fa fa-envelope"> </i> {{ $predio->user->email }}
                                                </span>

                                            </div>

                                            
                                            <br><br>
                                            
                                            <a href="{{ route('mensaje') }}" class="btn btn-danger btn-lg btn-block">Enviar mensaje</a>
                                            

                                    </div>

                                </aside>

                            @else

                                <aside class="col-md-4 column">

                                    <div class="agent_bg_widget widget">

                                        <div class="card">
                                           
                                            
                                            <h1 class="text-center" style="padding-top: 5px; color:black;">TransVentas</h1>
                                   
                                            <img src="{{ asset('images/predio.jpg') }}" width="350px" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    Hola bienvenido aca encontraras cabezales y furgones de distintas marcas y
                                                    modelos
                                                    de reciente ingreso listos para trabajar , inicia secion para poder enviar
                                                    mensaje
                                                    al vendedor o registrate si aun no lo has hecho .
                                                </p>
                                            </div>
                                        </div>

                                        <a href="{{ route('mensaje') }}" class="btn btn-danger  btn-block"> Enviar mensaje</a>

                                    </div>

                                </aside>

                            @endauth

                        @endif


                        {{-- Detalles Cabezal --}}


                            
                        
                        <div class="col-md-6">


                            <div class="vehicul-detail">

                                <h4 style="color: blue; ">Detalles del Cabezal</h4>
                                <div class="detail-field row">
                                    <ul style="color:red;">
                                        <li>Marca : {{ $predio->titulo }}</li>
                                        <li>Modelo : {{ $predio->modelo }}</li>
                                        <li>Papeles tipo : {{ $predio->categoria }}</li>
                                        <li>Condicion : {{ $predio->condicion }}</li>
                                        <li>Ubicacion : {{ $predio->ubicacion }}</li>
                                    </ul>
                                </div>
                                <h4 style="color: blue;padding-bottom:10px; ">Precio Financiado : Q {{ $predio->precio }}</h4>
                            </div>


                        </div>

                        {{-- Descripcion completa --}}

                        <div class="col-md-6">

                            <div class="vehicul-detail">

                                <h4 style="color: blue; ">Descripcion</h4>
                                <div class="detail-field row">
                                    <ul style="list-style:none;">
                                        <li>{{ $predio->descripcioncompleta }}</li>
                                    </ul>

                                </div>

                            </div>
                        </div>



                    </div>

                    {{-- Seccion de silder de otros cabezales --}}

                    <div class="related-vehiculs-">
                        <div class="heading3">
                            <h3>Otros cabezales listos para trabajar</h3>
                        </div>

                        <div class="related">
                            <div class="related-vehiculs-items">

                                
                                
                              
                                <div class="item">
                                        
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="{{ asset('storage/predio/thumbnail/'.$predio->files[0]->url) }}" alt="" />
                                            <span class="spn-status"> {{ $predio->categoria }}</span>
                                            
                                            <a class="proeprty-sh-more"
                                            href="{{ route('detalle-cabezal-reciente-ingreso', $predio->id) }}"><i
                                                class="fa fa-angle-double-right">
                                            </i><i class="fa fa-angle-double-right"> </i></a>
                                        </div>
                                        
                                        <h3><a title="{{ $predio->titulo }}">{{ $predio->titulo }}</a></h3>
                                        
                                        <span class="price">$340000</span>
                                        
                                    </div>
                                </div>
                               

                               

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

   
@endsection
