@extends('front-end.template')

@section('content')

    <section class="box-slider-search" style="margin-bottom:-70px;">
        <div class="container">
            <h1 class="nocontent outline">--- Search form  ---</h1>
            <div class="row">
                <div class="col-md-8">
                    <div id="rev_slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" >
                        <div class="tp-banner-container">
                            <div class="tp-banner">
                                @foreach ($predios as $predio)

                                        <!-- MAIN IMAGE -->
                                        <img src="img/imagenPrincipal.jpg">

                                @endforeach()
                            </div>
                        </div>
                    </div><!-- END REVOLUTION SLIDER -->
                </div>

                <div class="col-md-4">
                    <div class="horizontal-search v-f-p">
                        <div class="search-form">
                            <h1 class="fsearch-title">
                                <i class="fa fa-search"></i><span>Buscar cabezal</span>
                            </h1>

                            <form action="vehiculs.html"  method="get" class="form-inline">
                                <div class="search-form-content">
                                    <div class="search-form-field">
                                        <div class="form-group col-md-12">
                                            <div class="label-select">
                                                <select class="form-control" name="s_location">
                                                    <option>Cualquier Marca</option>
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
                                                    <option>Cualquier Modelo </option>
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
                                    </div>
                                </div>
                                <div class="search-form-submit">
                                    <button type="submit" class="btn-search">Buscar</button>
                                </div>
                            </form>
                        </div><!-- Services Sec -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="container">
            <div class="heading4">
                <h2>CABEZALES RECIENTE INGRESO</h2>
                <span>Los cabeales de resiente ingreso entraron en u rango de 6 meses y no han trabajado en Guatemala</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="vehiculs-sec">
                        <div class="row">
                            @foreach ($predios as $predio)

                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="{{ asset('storage/predio/' . $predio->files[0]->url) }}" alt="" />
                                            <span class="spn-status"> {{ $predio->condicion->nombre }} </span>


                                            <a class="proeprty-sh-more"
                                                href="{{ route('detalle-cabezal', $predio->id) }}"><i
                                                    class="fa fa-angle-double-right">
                                                </i><i class="fa fa-angle-double-right"> </i></a>

                                        </div>
                                        <h3><a href="vehicul.html" title="">{{ $predio->titulo }}</a></h3>
                                        <span class="price">Q{{ $predio->precio }}</span>

                                    </div><!-- prop Box -->
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>

    <section class="block">
        <div style="background: url(img/imagenPrincipal.jpg) repeat scroll 50% 422.28px transparent; background-attachment: fixed;"
            class="parallax scrolly-invisible  blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="vehiculs-text-bar">
                        <h3>Registrate <span> y unete a nuestra comunidad de venta de cabezales</span> y furgones! </h3>
                        <a href="#" title="" class="flat-btn">Unete a nuestra comunidad</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="container">
            <div class="heading4">
                <h2>FURGONES RECIENTE INGRESO</h2>
                <span>Estos son cabezales que aun no han ingresado a Guatemala pero ya estan en camino hacia nuestro
                    predio</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="vehiculs-sec">
                        <div class="row">

                            @foreach ($furgones as $furgones)

                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="{{ asset('storage/predio/' . $furgones->files[0]->url) }}" alt="" />
                                            <span class="spn-status"> {{ $furgones->condicion->nombre }} </span>

                                            <a class="proeprty-sh-more" href="{{ route('detalle-furgon', $furgones->id) }}"><i class="fa fa-angle-double-right">
                                                </i><i class="fa fa-angle-double-right"> </i></a>
                                        </div>
                                        <h3><a href="" title="">{{ $furgones->titulo }}</a></h3>
                                        <span class="price">Q{{ $furgones->precio }}</span>

                                    </div><!-- prop Box -->
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block">
        <div style="background: url(img/imagenPrincipal.jpg) repeat scroll 50% 422.28px transparent; background-attachment: fixed;"
            class="parallax scrolly-invisible  blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="vehiculs-text-bar">
                        <h3>Registrate <span> y unete a nuestra comunidad de venta de cabezales</span> y furgones! </h3>
                        <a href="#" title="" class="flat-btn">Unete a nuestra comunidad</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="container">
            <div class="heading4">
                <h2>CARROS RECIENTE INGRESO</h2>
                <span>Estos son cabezales que aun no han ingresado a Guatemala pero ya estan en camino hacia nuestro
                    predio</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="vehiculs-sec">
                        <div class="row">

                            @foreach ($carros as $carro)

                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="{{ asset('storage/predio/' . $carro->files[0]->url) }}" alt="" />
                                            <span class="spn-status"> {{ $carro->condicion->nombre }} </span>

                                            <a class="proeprty-sh-more" href="{{ route('detalle-carro', $carro->id) }}"><i class="fa fa-angle-double-right">
                                                </i><i class="fa fa-angle-double-right"> </i></a>
                                        </div>
                                        <h3><a href="" title="">{{ $carro->titulo }}</a></h3>
                                        <span class="price">${{ $carro->precio }}</span>

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
