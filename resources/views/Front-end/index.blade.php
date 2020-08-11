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
                            <img src="{{ Storage::url($predio->files->last()->url) }}" alt="" />
                                <span class="spn-status"> {{$predio->condicion}} </span>
                                <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                                <div class="user-preview">
                                    <a class="col" href="">
                                    <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="{{$predio->usuario}}">
                                    </a> 
                                </div> 
                                <a class="proeprty-sh-more" 
                            href="{{ route('detalle-cabezal', $predio->id) }}"><i 
                                class="fa fa-angle-double-right"> 
                                </i><i class="fa fa-angle-double-right"> </i></a>
                               <p class="car-info-smal">

                                Registration {{$predio->created_at}}<br>
                                {{$predio->km}}
                                </p>
                            </div>
                        <h3><a href="vehicul.html" title="">{{$predio->titulo}}</a></h3>
                        <span class="price">${{$predio->precio}}</span>
                        
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
<div style="background: url(img/call-to-action-bg.jpg) repeat scroll 50% 422.28px transparent; background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="vehiculs-text-bar">
<h3>Registrate <span> y envianos </span>Mensaje ! </h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare porttitor diam<br/> a accumsan justo laoreet suscipit. Maecenas at bibendum nunc</p>
<a href="#" title="" class="flat-btn">Joing us</a>
</div>
</div>
</div>
</div>
</section>

<section class="block">
<div class="container">
<div class="heading4">
<h2>CABEZALES POR INGRESAR</h2>
<span>Estos son cabezales que aun no han ingresado a Guatemala pero ya estan en camino hacia nuestro predio</span>
</div>
<div class="row">
<div class="col-md-12">
<div class="vehiculs-sec">
<div class="row">   

@foreach ( $featured as $fea )    

<div class="col-md-4">
    <div class="vehiculs-box">
        <div class="vehiculs-thumb">
            <img src="{{ Storage::url($fea->files->last()->url) }}" alt="" />
            <span class="spn-status"> {{$fea->condicion}} </span>
            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

            <div class="user-preview">
                <a class="col" href="">
                <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="{{$fea->usuario}}">
                </a> 
            </div> 
            <a class="proeprty-sh-more" 
                href=""><i 
                class="fa fa-angle-double-right"> 
                </i><i class="fa fa-angle-double-right"> </i></a>
            <p class="car-info-smal">

            Registration {{$fea->created_at}}<br>
            {{$fea->km}}
            </p>
        </div>
    <h3><a href="" title="">{{$fea->titulo}}</a></h3>
    <span class="price">${{$fea->precio}}</span>
        
    </div><!-- prop Box -->
</div>                                

@endforeach

</div>
</div>
</div>
</div>
</div>
</section>


@endsection