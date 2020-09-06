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

                                                    @foreach ($files as $pre)
                                                        <li data-thumb="{{ asset('storage/predio/'.$pre->url) }}" alt="CarDealer">
                                                            <img src="{{ asset('storage/predio/'.$pre->url) }}" 
                                                            width="700px"
                                                            height="600px"
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

                                        @foreach ($users as $profile)

                                            <div class="agent_widget">
                                                <div class="agent_pic">

                                                    @if (Auth::user()->image)
                                                        <img src="{{ asset('/storage/imagesUser/' . Auth::user()->image) }}"
                                                            style="margin-left: 1rem;" width="50px" alt="imagen">
                                                    @endif

                                                    <h4>{{ $profile->name }}</h4>
                                                </div>
                                                <span>
                                                    <i class="fa fa-phone"> </i> +1 9090909090
                                                </span>
                                                <span>
                                                    <i class="fa fa-envelope"> </i> {{ $profile->email }}
                                                </span>

                                            </div>

                                        @endforeach

                                        <br><br>

                                        <a href="#" class="btn btn-danger btn-lg btn-block">Enviar mensaje</a>

                                    </div>

                                </aside>

                            @else

                                <aside class="col-md-4 column">

                                    <div class="agent_bg_widget widget">

                                        <div class="card">
                                           

                                            <h1 class="text-center" style="padding-top: 5px; color:black;">TransVentas</h1>
                                   
                                            <img src="{{ asset('images/predio.jpg') }}" class="card-img-top" alt="...">
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

                                        <a href="http://" class="btn btn-danger btn-lg btn-block">Registrate</a>

                                    </div>

                                </aside>

                            @endauth

                        @endif


                        {{-- Detalles Cabezal --}}

                        <div class="col-md-6">


                            <div class="vehicul-detail">

                                <h2 style="color: blue; ">Detalles del Cabezal</h2>
                                <div class="detail-field row">
                                    <ul style="color:red;">
                                        <li>Marca : {{ $predios->titulo }}</li>
                                        <li>Modelo : {{ $predios->modelo }}</li>
                                        <li>Papeles tipo : {{ $predios->categoria }}</li>
                                        <li>Condicion : {{ $predios->condicion }}</li>
                                        <li>Ubicacion : {{ $predios->ubicacion }}</li>
                                    </ul>
                                </div>
                                <h2 style="color: blue;padding-bottom:10px; ">Precio Financiado : Q {{ $predios->precio }}
                                </h2>
                            </div>


                        </div>

                        {{-- Descripcion completa --}}

                        <div class="col-md-6">

                            <div class="vehicul-detail">

                                <h2 style="color: blue; ">Descripcion</h2>
                                <div class="detail-field row">
                                    <ul style="list-style:none;">
                                        <li>{{ $predios->descripcioncompleta }}</li>
                                    </ul>

                                </div>

                            </div>
                        </div>

                    </div>

                    {{-- Seccion de silder de otros cabezales --}}

                    <div class="related-vehiculs-">
                        <div class="heading3">
                            <h3>Cabezales listos para trabajar</h3>
                        </div>

                        <div class="related">
                            <div class="related-vehiculs-items">

                                <div class="item">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="/img/demo/vehicul1.jpg" alt="" />
                                            <span class="spn-status"> Damaged</span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="/img/4.png"
                                                        title="Camilė">
                                                </a>
                                            </div>
                                            <a class="proeprty-sh-more" href="vehicul.html"><i
                                                    class="fa fa-angle-double-right"> </i><i
                                                    class="fa fa-angle-double-right"> </i></a>
                                            <p class="car-info-smal">
                                                Registration 2010<br>
                                                3.0 Diesel<br>
                                                230 HP<br>
                                                Body Coupe<br>
                                                80 000 Miles
                                            </p>
                                        </div>
                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
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
