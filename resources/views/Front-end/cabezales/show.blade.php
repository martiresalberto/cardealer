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
                slideMargin: 0,
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
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 column">
                            <div class="single-post-sec">
                                <div class="blog-post vehicul-post">

                                    <div class="vehicul-gallery">
                                        <div class="light-slide-item">
                                            <div class="favorite-and-print">
                                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                    @foreach ($predio->files as $pre)
                                                        <li
                                                            data-thumb="{{ asset('storage/predio/thumbnail/' . $pre->url) }}">
                                                            <img src="{{ asset('storage/predio/thumbnail/' . $pre->url) }}"
                                                                alt="KwitaraCars" />
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <h1>Price : {{ $predio->precio }}Q</h1>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="vehicul-detail">

                                                <div class="detail-field row">
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Marca</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value"><a href="#"
                                                            rel="tag">{{ $predio->titulo }}</a></span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Modelo</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value"><a href="#"
                                                            rel="tag">{{ $predio->modelo }}</a></span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Categoria</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value"><a href="#"
                                                            rel="tag">{{ $predio->categoria }}</a></span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Ubicacion</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">
                                                        <span class="amount">{{ $predio->ubicacion }}</span>
                                                    </span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Millage</span>
                                                    <span
                                                        class="col-xs-6 col-md-7 detail-field-value">{{ $predio->km }}</span>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <p>{{ $predio->descripcioncompleta }} </p>
                                        </div>
                                    </div>

                                    <div class="vehicul-video">
                                        <div class="heading3">
                                            <h2>VIDEO DEL CABEZAL </h2>
                                        </div>
                                        <iframe height="400" src="https://www.youtube.com/embed/rlasf0cUfzU"
                                            allowfullscreen></iframe>
                                    </div>

                                    <div class="send-email-to-agent">
                                        <div class="comment-form">
                                            <div class="heading3">
                                                <h2>ENVIAR MENSAJE A {{ $predio->user->name}}</h2>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>
                                                            <i class="fa fa-user"></i>
                                                            <input type="text" placeholder="Name" />
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>
                                                            <i class="fa fa-at"></i>
                                                            <input type="text" placeholder="Email Id" />
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>
                                                            <i class="fa fa-phone"></i>
                                                            <input type="text" placeholder="Phone Number" />
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>
                                                            <i class="fa fa-pencil"></i>
                                                            <textarea placeholder="Your Message"></textarea>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="flat-btn">SEND MESSAGE</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

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
                                            <img src="{{ asset('/storage/imagesUser/' . $predio->user->image) }}" alt="" />
                                            <h3 class="nocontent outline">--- document outline needed 3 ---</h3>
                                            <h4>{{ $predio->user->name }}</h4>
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
                                        <i class="fa fa-envelope"> </i> transventas7@gmail.com
                                    </span>
                                    <a href="" title="" class="btn contact-agent">Ver mas</a>
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


                    <div class="related-vehiculs-">
                        <div class="heading3">
                            <h3>CABEZALES RELACIONADOS</h3>
                            <span>Lorem ipsum dolor amet</span>
                        </div>
                        <div class="related">
                            <div class="related-vehiculs-items">
                                <div class="item">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="img/demo/vehicul1.jpg" alt="" />
                                            <span class="spn-status"> Damaged</span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/4.png"
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
                    <!-- Related Posts -->

                </div>
            </div>
        </div>
    </section>


@endsection