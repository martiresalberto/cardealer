@extends('front-end.template')


@section('content')

<section class="horizontal-search">
<div class="container">
<h1 class="nocontent outline">--- Search form  ---</h1>
<div class=""> 
<div class="search-form"> 
<form action="vehiculs.html"  method="get" class="form-inline">   
<div class="search-form-content">
<div class="search-form-field">  
    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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

    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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

    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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

    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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

    <div class="form-group col-xs-12 col-sm-3 col-md-3">                                        
    </div>
    <div class="form-group col-xs-12 col-sm-3 col-md-3">
        <span class="gprice-label">Price Range</span>
        <input type="text" class="span2" value="" data-slider-min="0" 
                data-slider-max="60000" data-slider-step="5" 
                data-slider-value="[0,60000]" id="price-range" >
    </div>
    <div class="form-group col-xs-12 col-sm-3 col-md-3">
        <span class="garea-label">Mileage Range</span> 
        <input type="text" class="span2" value="" data-slider-min="0" 
                data-slider-max="60000" data-slider-step="5" 
                data-slider-value="[50,60000]" id="vehicul-geo" >
    </div>                                            
</div> 
</div>
<div class="search-form-submit">
<button type="submit" class="btn-search">Search</button>
</div>
</form>
</div><!-- Services Sec -->

</div>
</div>
</section>


<section class="block">
<div class="container">

    
    
    <div class="heading4">
        <h2>CABEZALES RECIENTES</h2>
        <span>Lorem ipsum dolor consectetu</span>
    </div>
    <div class="row">
        <div class="col-md-12">
<div class="vehiculs-sec">
@foreach($predio as $pre)    

<div class="row">   

<div class="col-md-4">
    <div class="vehiculs-box" data-toggle="modal" data-target="#predio{{$pre->id}}">
        
        <div class="vehiculs-thumb">
            <img src="{{ Storage::url($pre->image) }}" alt="" />
            
            <span class="spn-status"> {{$pre->condicion}} </span>
            {{-- <span class="spn-save"> <i class="ti ti-heart"></i> </span> --}}

            <div class="user-preview">
                <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Publicado por : {{$pre->usuario}}">
            </div> 

            
        </div>
        <center> 
         <h3>
            <span class="title"> {{$pre->titulo}}</span>
            <span style="margin-left:20px; color:red;">Q{{$pre->precio}} </span>
         </h3>
    
    </div><!-- prop Box -->
</div>                                

</div>

@include('Front-end.form')

@endforeach
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
<h2>FEATURED VEHICULS</h2>
<span>Lorem ipsum dolor consectetu</span>
</div>
<div class="row">
<div class="col-md-12">
<div class="vehiculs-sec">
<div class="row">   

@foreach ( $featured as $fea )    

<div class="col-md-4">
    <div class="vehiculs-box">
        <div class="vehiculs-thumb">
            <img src="{{ Storage::url($fea->image) }}" alt="" />
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
    <h3><a href="vehicul.html" title="">{{$fea->titulo}}</a></h3>
    <span class="price">${{$fea->precio}}</span>
        <span class="rate-it">
            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
            <i title="nice" class="ti ti-star off star-off-png"></i> 
        </span>
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
<div style="background: transparent url(&quot;img/call-to-action-big.jpg&quot;) repeat scroll 50% 0px; background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div>
<div class="container">                
<div class="row">
<div class="col-md-12">
<div class="heading4">
<h2>Testimonios clientes satisfechos</h2>
<span>Lorem ipsum dolor</span>
</div>
<div class="agents-carousal-sec">
<ul class="carousel">

    <li>
        <div class="agent-content">
            <a href=""><img src="" alt="" /></a>
            <h3></h3>
            <p></p>

            <div class="agent-social-wrap">
                <div class="social-list agent-social">
                    <a href="www.facebook.com" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="www.twuiter.com" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="www.google.com" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </li>

</ul>
</div>
</div>
</div>                
</div>            
</section>

<section class="block">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="agents-carousal-sec">
<div class="heading4">
<h2>OUR PARTNERS </h2>
<span>Lorem ipsum dolor</span>
</div>
<div class="our-clients-sec">
<ul class="carousel-client">
    <li>
        <a href="#" title=""><img src="img/clients/our-client1.jpg" alt="" /></a>
    </li>
    <li>
        <a href="#" title=""><img src="img/clients/our-client2.jpg" alt="" /></a>
    </li>
    <li>
        <a href="#" title=""><img src="img/clients/our-client3.jpg" alt="" /></a>
    </li>
    <li>
        <a href="#" title=""><img src="img/clients/our-client4.jpg" alt="" /></a>
    </li>
    <li>
        <a href="#" title=""><img src="img/clients/our-client5.jpg" alt="" /></a>
    </li>
    <li>
        <a href="#" title=""><img src="img/clients/our-client1.jpg" alt="" /></a>
    </li>
    <li>
        <a href="#" title=""><img src="img/clients/our-client3.jpg" alt="" /></a>
    </li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>   


@endsection