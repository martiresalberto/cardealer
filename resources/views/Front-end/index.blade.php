@extends('front')


@section('horizontal-search')

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

@endsection


@section('blockremove-top')

<section class="block">

<div class="container">

<div class="heading4">
    <h2>Lo mas reciente</h2>
    <span>Lorem ipsum dolor consectetu</span>
</div>

<div class="row">

<div class="col-md-12">

<div class="vehiculs-sec">

<div class="row">     
@foreach($cabezales as $cabezal)   

<div class="col-md-4">
<div class="vehiculs-box">
<div class="vehiculs-thumb">
<img src="{{ Storage::url($cabezal->imgCabezal) }}" alt="" />
<span class="spn-status"> Usado </span>
                            
<a class="proeprty-sh-more" data-toggle="modal" data-target="#cabezales{{ $cabezal->id }}">
    <i class="fa fa-angle-double-right"></i>
    <i class="fa fa-angle-double-right"></i>
</a>
        
</div>

<h3>
    <a href="" title="">{{ $cabezal->name_marca }}</a>
</h3>

<span class="price">$444000</span>
                      
</div><!-- prop Box -->


</div>
        
            
@endforeach()    

</div>

</div>

</div>

</div>

</div>


</section>

@endsection

@include('Front-end.partials.modal')




@section('blockuno')

<section class="block">
<div style="background: url(/img/call-to-action-bg.jpg) repeat scroll 50% 422.28px transparent; background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="vehiculs-text-bar">
                <h3>Sell or Rent  <span> vehiculs </span>Quickly ! </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare porttitor diam<br/> a accumsan justo laoreet suscipit. Maecenas at bibendum nunc</p>
                <a href="#" title="" class="flat-btn">Joing us</a>
            </div>
        </div>
    </div>
</div>
</section>

@endsection


@section('FeaturedVehiculs')

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
                <div class="col-md-4">
                    <div class="vehiculs-box">
                        <div class="vehiculs-thumb">
                            <img src="/img/demo/vehicul4.jpg" alt="" />
                            <span class="spn-status"> Semi-New </span>
                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                            <div class="user-preview">
                                <a class="col" href="agent.html">
                                    <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                </a> 
                            </div> 
                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                            <p class="car-info-smal">
                                Registration 2010<br>
                                3.0 Diesel<br>
                                230 HP<br>
                                Body Coupe<br>
                                80 000 Miles
                            </p>
                        </div>
                        <h3><a href="vehicul.html" title="">Mercedes-Benz</a></h3>
                        <span class="price">$444000</span>
                        <span class="rate-it">
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                        </span>
                    </div><!-- prop Box -->
                </div>                                
                <div class="col-md-4">
                    <div class="vehiculs-box">
                        <div class="vehiculs-thumb">
                            <img src="/img/demo/vehicul3.jpg" alt="" />
                            <span class="spn-status"> Damaged </span>
                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                            <div class="user-preview">
                                <a class="col" href="agent.html">
                                    <img alt="Camilė" class="avatar avatar-small" src="/img/1.png" title="Camilė">
                                </a> 
                            </div> 
                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                            <p class="car-info-smal">
                                Registration 2010<br>
                                3.0 Diesel<br>
                                230 HP<br>
                                Body Coupe<br>
                                80 000 Miles
                            </p>
                        </div>
                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                        <span class="price">$789000</span>
                        <span class="rate-it">
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                        </span>
                    </div><!-- prop Box -->
                </div>
                <div class="col-md-4">
                    <div class="vehiculs-box">
                        <div class="vehiculs-thumb">
                            <img src="/img/demo/vehicul2.jpg" alt="" />
                            <span class="spn-status"> Semi-New </span>
                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                            <div class="user-preview">
                                <a class="col" href="agent.html">
                                    <img alt="Camilė" class="avatar avatar-small" src="/img/2.png" title="Camilė">
                                </a> 
                            </div> 
                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                            <p class="car-info-smal">
                                Registration 2010<br>
                                3.0 Diesel<br>
                                230 HP<br>
                                Body Coupe<br>
                                80 000 Miles
                            </p>
                        </div>
                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                        <span class="price">$380000</span>
                        <span class="rate-it">
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                        </span>
                    </div><!-- prop Box -->
                </div>
                <div class="col-md-4">
                    <div class="vehiculs-box">
                        <div class="vehiculs-thumb">
                            <img src="/img/demo/vehicul4.jpg" alt="" />
                            <span class="spn-status"> Damaged </span>
                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                            <div class="user-preview">
                                <a class="col" href="agent.html">
                                    <img alt="Camilė" class="avatar avatar-small" src="/img/4.png" title="Camilė">
                                </a> 
                            </div> 
                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                            <p class="car-info-smal">
                                Registration 2010<br>
                                3.0 Diesel<br>
                                230 HP<br>
                                Body Coupe<br>
                                80 000 Miles
                            </p>
                        </div>
                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                        <span class="price">$1000000</span>
                        <span class="rate-it">
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                        </span>
                    </div><!-- prop Box -->
                </div>
                <div class="col-md-4">
                    <div class="vehiculs-box">
                        <div class="vehiculs-thumb">
                            <img src="/img/demo/vehicul5.jpg" alt="" />
                            <span class="spn-status"> Used </span>
                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                            <div class="user-preview">
                                <a class="col" href="agent.html">
                                    <img alt="Camilė" class="avatar avatar-small" src="/img/3.png" title="Camilė">
                                </a> 
                            </div> 
                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                            <p class="car-info-smal">
                                Registration 2010<br>
                                3.0 Diesel<br>
                                230 HP<br>
                                Body Coupe<br>
                                80 000 Miles
                            </p>
                        </div>
                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                        <span class="price">$500000</span>
                        <span class="rate-it">
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                        </span>
                    </div><!-- prop Box -->
                </div>
                <div class="col-md-4">
                    <div class="vehiculs-box">
                        <div class="vehiculs-thumb">
                            <img src="/img/demo/vehicul3.jpg" alt="" />
                            <span class="spn-status"> Damaged</span>
                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                            <div class="user-preview">
                                <a class="col" href="agent.html">
                                    <img alt="Camilė" class="avatar avatar-small" src="/img/2.png" title="Camilė">
                                </a> 
                            </div> 
                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
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
                        <span class="rate-it">
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                        </span>
                    </div><!-- prop Box -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

@endsection


@section('blockdos')

<section class="block">
<div style="background: transparent url(&quot;/img/call-to-action-big.jpg&quot;) repeat scroll 50% 0px; background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div>
<div class="container">                
    <div class="row">
        <div class="col-md-12">
            <div class="heading4">
                <h2>OUR AGENTS</h2>
                <span>Lorem ipsum dolor</span>
            </div>
            <div class="agents-carousal-sec">
                <ul class="carousel">
                    <li>
                        <div class="agent-content">
                            <a href="agent.html"><img src="/img/agents/agent1.jpg" alt="" /></a>
                            <h3>SUPER AGENT</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                            <div class="agent-social-wrap">
                                <div class="social-list agent-social">
                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agent-content">
                            <a href="agent.html"><img src="/img/agents/agent3.jpg" alt="" /></a>
                            <h3>SUPER AGENT</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                            <div class="agent-social-wrap">
                                <div class="social-list agent-social">
                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agent-content">
                            <a href="agent.html"><img src="/img/agents/agent5.jpg" alt="" /></a>
                            <h3>SUPER AGENT</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                            <div class="agent-social-wrap">
                                <div class="social-list agent-social">
                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agent-content">
                            <a href="agent.html"><img src="/img/agents/agent4.jpg" alt="" /></a>
                            <h3>SUPER AGENT</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                            <div class="agent-social-wrap">
                                <div class="social-list agent-social">
                                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
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


@endsection


@section('OurPartners')

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
                            <a href="#" title=""><img src="/img/clients/our-client1.jpg" alt="" /></a>
                        </li>
                        <li>
                            <a href="#" title=""><img src="/img/clients/our-client2.jpg" alt="" /></a>
                        </li>
                        <li>
                            <a href="#" title=""><img src="/img/clients/our-client3.jpg" alt="" /></a>
                        </li>
                        <li>
                            <a href="#" title=""><img src="/img/clients/our-client4.jpg" alt="" /></a>
                        </li>
                        <li>
                            <a href="#" title=""><img src="/img/clients/our-client5.jpg" alt="" /></a>
                        </li>
                        <li>
                            <a href="#" title=""><img src="/img/clients/our-client1.jpg" alt="" /></a>
                        </li>
                        <li>
                            <a href="#" title=""><img src="/img/clients/our-client3.jpg" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section> 

@endsection