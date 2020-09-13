@extends('front-end.template')


@section('content')


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
                                        <img src="{{ asset('storage/predio/'.$predio->files[0]->url) }}" alt="" />
                                        <span class="spn-status"> {{ $predio->categoria }} </span>
                                

                                        <a class="proeprty-sh-more"
                                            href="{{ route('detalle-cabezal-inicio', $predio->id) }}"><i
                                                class="fa fa-angle-double-right">
                                            </i><i class="fa fa-angle-double-right"> </i></a>
                                        
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

                        @foreach ($featured as $fea)

                            <div class="col-md-4">
                                <div class="vehiculs-box">
                                    <div class="vehiculs-thumb">
                                        <img src="{{ asset('storage/predio/'.$fea->files[0]->url) }}" alt="" />
                                        <span class="spn-status"> {{ $fea->condicion }} </span>

                                        <a class="proeprty-sh-more" href=""><i class="fa fa-angle-double-right">
                                            </i><i class="fa fa-angle-double-right"> </i></a>
                                        <p class="car-info-smal">

                                            Registration {{ $fea->created_at }}<br>
                                            {{ $fea->km }}
                                        </p>
                                    </div>
                                    <h3><a href="" title="">{{ $fea->titulo }}</a></h3>
                                    <span class="price">${{ $fea->precio }}</span>

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

                        @foreach ($featured as $fea)

                            <div class="col-md-4">
                                <div class="vehiculs-box">
                                    <div class="vehiculs-thumb">
                                        <img src="{{ asset('storage/predio/'.$fea->files[0]->url) }}" alt="" />
                                        <span class="spn-status"> {{ $fea->condicion }} </span>

                                        <a class="proeprty-sh-more" href=""><i class="fa fa-angle-double-right">
                                            </i><i class="fa fa-angle-double-right"> </i></a>
                                        <p class="car-info-smal">

                                            Registration {{ $fea->created_at }}<br>
                                            {{ $fea->km }}
                                        </p>
                                    </div>
                                    <h3><a href="" title="">{{ $fea->titulo }}</a></h3>
                                    <span class="price">${{ $fea->precio }}</span>

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
