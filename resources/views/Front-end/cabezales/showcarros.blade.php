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
                thumbItem: 11,
                slideMargin: 12,
                speed: 0,
                auto: false,
                loop: false,
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
                
                @if (session()->has('flash'))
                
                <div class="container">
                    <div class="alert alert-success">{{ session('flash') }}</div>
                </div>
                
                @endif

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 column">
                            <div class="single-post-sec">
                                <div class="blog-post vehicul-post">

                                    <div class="vehicul-gallery">
                                        <div class="light-slide-item">
                                            <div class="favorite-and-print">
                                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                    @foreach ($carros->files as $pre)
                                                        <li data-thumb="{{ asset('storage/predio/' . $pre->url) }}">
                                                            <img src="{{ asset('storage/predio/thumbnail/' . $pre->url) }}"
                                                                alt="CarDealer" />
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <h1>Price : Q{{ $carros->precio }}</h1>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="vehicul-detail">

                                                <div class="detail-field row">
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Marca</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">
                                                        <span>{{ $carros->titulo }}</span>
                                                    </span>

                                                    <span class="col-xs-6 col-md-5 detail-field-label">Modelo</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">
                                                        <span class="amount">{{ $carros->modelo }}</span>
                                                    </span>

                                                    <span class="col-xs-6 col-md-5 detail-field-label">Categoria</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">
                                                        <span class="amount">{{ $carros->categoria }}</span>
                                                    </span>

                                                    <span class="col-xs-6 col-md-5 detail-field-label">Ubicacion</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">
                                                        <span class="amount">{{ $carros->ubicacion }}</span>
                                                    </span>

                                                    <span class="col-xs-6 col-md-5 detail-field-label">Millage</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">
                                                        <span class="amount">{{ $carros->km }}</span>
                                                    </span>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <p>{{ $carros->descripcioncompleta }} </p>
                                        </div>
                                    </div>

                                    <div class="vehicul-video">
                                        <div class="heading3">
                                            <h2>vehicul Video </h2> 
                                        </div>
                                        <video autoplay muted loop src="{{ asset('storage/video/' . $carros->videos->urlVideo) }}" width="640" height="480"></video>
                                    </div>
                                    @guest
                                    
                                    <div class="send-email-to-agent">
                                        <div class="comment-form">
  
                                            <div class="alert alert-danger">
                                                <a href="{{ route('register') }}" class="btn btn-xs btn-danger pull-right">REGISTRATE</a>
                                                <strong>REGISTRATE:</strong> para enviar mensaje y recibir informacion de este cabezal o cualquier otro que busques o inicia sesion si ya eres usuario!
                                            </div>

                                        </div>
                                    </div>
                                    
                                    @else


                                    <div class="send-email-to-agent">
                                        <div class="comment-form">
                                            <div class="heading3">
                                                <h2>ENVIAR MENSAJE A {{ $carros->user->name}}</h2>
                                            </div>
                                            <form action="{{ route('enviarmensaje') }}"  method="POST">
                                                @csrf

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>
                                                            <i class="fa fa-user"></i>
                                                            
                                                            <input type="text" name="recipient_id" value="{{ $carros->user->id }}" class="hidden">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>
                                                            <i class="fa fa-email"></i>
                                                         @if (Auth::user()->email)
                                                            <input type="text" name="email" value="{{ Auth::user()->email }}" class="hidden">
                                                         @endif  
                                                        </label>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label>
                                                        <i class="fa fa-truck fa-lg"></i>
                                                        <input type="text" name="nCabezal"
                                                            placeholder="Que cabezal buscas ?">
                                                        </label>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label>
                                                            <i class="fa fa-pencil"></i>
                                                            <textarea name="text"
                                                                placeholder="Escribe tu mensaje"></textarea>
                                                        </label>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" class="flat-btn">ENVIAR MENSAJE</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    @endguest


                                </div>

                                <!-- Blog Post -->

                            </div>

                            <!-- Blog POst Sec -->

                        </div>

                        <aside class="col-md-4 column">
                            <div class="agent_bg_widget widget">
                                <div class="agent_widget">
                                    <div class="agent_pic">
                                        <a href="" title="">
                                            <img src="{{ asset('/storage/imagesUser/' . $carros->user->image) }}" alt="" />
                                            <h3 class="nocontent outline">--- document outline needed 3 ---</h3>
                                            <h4>{{ $carros->user->name }}</h4>
                                        </a>
                                    </div>
                                    <div class="agent_social">
                                        <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                        <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                        <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                        <a href="#" title=""><i class="fa fa-tumblr"></i></a>
                                    </div>
                                    <span>
                                        <i class="fa fa-phone"> </i> +502 43745326
                                    </span>
                                    <span>
                                        <i class="fa fa-envelope"> </i> {{ $carros->user->email }}
                                    </span>
                                    <a href="{{ route('cabezales-reciente-ingreso') }}" title="" class="btn contact-agent">Ver publicaciones</a>
                                </div>
                            </div><!-- Follow Widget -->

                            <div class="search_widget widget">
                                <div class="heading2">
                                    <h3>BUSCAR CABEZALES</h3>
                                </div>
                                <div class="search-form">
                                    <form action="vehiculs.html" method="get" class="form-inline">
                                        <div class="search-form-content">
                                            <div class="search-form-field">
                                                <div class="form-group col-md-12">
                                                    <div class="label-select">
                                                        <select class="form-control" name="s_location">
                                                            <option>Any Manufacturer</option>
                                                            <option>Audi</option>
                                                            <option>Mercedes-Benz</option>
                                                            <option>BMW</option>
                                                            <option>Lexus</option>
                                                            <option>Lincoln</option>
                                                            <option>Ford</option>
                                                            <option>Fiat</option>
                                                            <option>Dodge</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <div class="label-select">
                                                        <select class="form-control" name="anymodule">
                                                            <option>Any Model </option>
                                                            <option value="1">R8</option>
                                                            <option value="2">S500</option>
                                                            <option value="3">540i</option>
                                                            <option value="4">RX300</option>
                                                            <option value="5">Navigator</option>
                                                            <option value="6">Taurus</option>
                                                            <option value="7">Doblo</option>
                                                            <option value="8">Viper</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <div class="label-select">
                                                        <select class="form-control" name="s_location">
                                                            <option>Any locations</option>
                                                            <option>Central New York</option>
                                                            <option>GreenVille</option>
                                                            <option>Long Island</option>
                                                            <option>New York City</option>
                                                            <option>West Side</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <div class="label-select">
                                                        <select class="form-control" name="s_statu">
                                                            <option>Any Status </option>
                                                            <option value="damaged">Damaged</option>
                                                            <option value="new">New</option>
                                                            <option value="semi-new">Semi-New</option>
                                                            <option value="used">Used</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <span class="gprice-label">Price Range</span>
                                                    <input type="text" class="span2" value="" data-slider-min="0"
                                                        data-slider-max="60000" data-slider-step="5"
                                                        data-slider-value="[0,60000]" id="price-range">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <span class="garea-label">Mileage Range</span>
                                                    <input type="text" class="span2" value="" data-slider-min="0"
                                                        data-slider-max="60000" data-slider-step="5"
                                                        data-slider-value="[50,60000]" id="vehicul-geo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-form-submit">
                                            <button type="submit" class="btn-search">Search</button>
                                        </div>
                                    </form>
                                </div><!-- Services Sec -->
                            </div><!-- Category Widget -->
                        </aside>
                    </div>

                </div>
                
            </div>
        </div>
    </section>

@endsection()
