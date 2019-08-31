@extends('front-end.template')


@section('head')

 @parent

 <link type="text/css" rel="stylesheet" href="{{ asset('css/lightslider.css') }}" />                  

@stop

@section('Script')

 @parent

 <script src="{{ asset('js/lightslider.js') }}"></script>

 <script>

 $(document).ready(function () {

$('#image-gallery').lightSlider({
gallery: true,
item: 1,
thumbItem: 9,
slideMargin: 0,
speed: 2000,
auto: true,
loop: true,
onSliderLoad: function () {
$('#image-gallery').removeClass('cS-hidden');
}
});
 });
 </script>

 <script type="text/javascript">
$(document).ready(function () {
"use strict";
$(".related-vehiculs-items").owlCarousel({
autoplay: true,
autoplayTimeout: 3000,
smartSpeed: 2000,
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


<div class="inner-head overlap" style="margin-top: 1px;">
    <div style="background: url(/img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE --> 
    <div class="container">
        <div class="inner-content">
            <span><i class="ti ti-home"></i></span>
            <h2>Mercedes-Benz</h2>
            <ul>
                <li><a href="#" title="">HOME</a></li>
                <li><a href="#" title="">Mercedes-Benz</a></li>
            </ul>
        </div>
    </div>
</div><!-- inner Head -->

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
                                        <li data-thumb="/img/one-car/1.jpg"> 
                                            <img src="/img/one-car/1.jpg" alt="KwitaraCars" />
                                        </li>
                                        <li data-thumb="/img/one-car/4.jpg"> 
                                            <img src="/img/one-car/4.jpg" alt="KwitaraCars" />
                                        </li>
                                        <li data-thumb="/img/one-car/3.jpg"> 
                                            <img src="/img/one-car/3.jpg" alt="KwitaraCars" />
                                        </li>  
                                        <li data-thumb="/img/one-car/2.jpg"> 
                                            <img src="/img/one-car/2.jpg" alt="KwitaraCars" />
                                        </li> 
                                        <li data-thumb="/img/one-car/1.jpg"> 
                                            <img src="/img/one-car/1.jpg" alt="KwitaraCars" />
                                        </li>
                                        <li data-thumb="/img/one-car/2.jpg"> 
                                            <img src="/img/one-car/2.jpg" alt="KwitaraCars" />
                                        </li>    
                                        <li data-thumb="/img/one-car/3.jpg"> 
                                            <img src="/img/one-car/3.jpg" alt="KwitaraCars" />
                                        </li>   
                                        <li data-thumb="/img/one-car/4.jpg"> 
                                            <img src="/img/one-car/4.jpg" alt="KwitaraCars" />
                                        </li>                                    
                                    </ul>
                                </div>
                            </div>
                        </div> 

                        <h1>Price :  2000000$</h1>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="vehicul-detail">

                                    <div class="detail-field row" >
                                        <span class="col-xs-6 col-md-5 detail-field-label">Manufacturer</span>
                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">Ford</a></span>
                                        <span class="col-xs-6 col-md-5 detail-field-label">Model</span>
                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">Ford x8</a></span>
                                        <span class="col-xs-6 col-md-5 detail-field-label">Vehicle Type</span>
                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">City Cars</a></span>
                                        <span class="col-xs-6 col-md-5 detail-field-label">Color</span>
                                        <span class="col-xs-6 col-md-7 detail-field-value">
                                            <span class="amount">Red</span> 
                                        </span>
                                        <span class="col-xs-6 col-md-5 detail-field-label">Mileage</span>
                                        <span class="col-xs-6 col-md-7 detail-field-value">762 44 KM</span>
                                        
                                        
                                        <span class="col-xs-6 col-md-5 detail-field-label">fuel</span>
                                        <span class="col-xs-6 col-md-7 detail-field-value">Diesel</span>
                                        
                                        <span class="col-xs-6 col-md-5 detail-field-label">Places</span>
                                        <span class="col-xs-6 col-md-7 detail-field-value">5</span>                                                        
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-7">
                                <p>Lorem ipsum dolor sit amet, ssa quis mauris sollicitudin commodo venenatis ligula commodo. Sed blandit convallis dignissim. Pellentesque pharetra velit eu velit elementum et convallis erat vulputate. Sed in nulla ut elit mporta nibh leo a massa. Sed quam nunc, vulputate vel imperdiet vel, aliquet sit amet risus. Maecenas nec tempus velit. Praesent gravida mi et mauris sollicitudin ultricies. Duis molestie quam sem, ac faucibus velit. Curabitur dolor dolor, fringilla vel fringilla tempor, ultricies sed tellus. </p>
                            </div>
                        </div>

                        <div class="vehicul-video">
                            <div class="heading3">
                                <h2>vehicul Video </h2> 
                            </div>
                            <iframe height="400" src="https://www.youtube.com/embed/rlasf0cUfzU" allowfullscreen></iframe>
                        </div>

                       

                    </div><!-- Blog Post -->
                </div><!-- Blog POst Sec -->
            </div>
            <aside class="col-md-4 column">
                <div class="agent_bg_widget widget"> 
                    <div class="agent_widget">
                        <div class="agent_pic">
                            <a href="agent.html" title="">
                                <img src="/img/demo/man1.jpg" alt="" />
                                <h3 class="nocontent outline">--- document outline needed 3 ---</h3>
                                <h4>Smith forbes</h4> 
                            </a>
                        </div>   
                        <div class="agent_social">
                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                            <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                            <a href="#" title=""><i class="fa fa-tumblr"></i></a>
                        </div>
                        <span>
                            <i class="fa fa-phone"> </i> +1 9090909090 
                        </span>
                        <span>
                            <i class="fa fa-envelope"> </i> agent@company.com
                        </span>
                        <a href="agent.html"  title="" class="btn contact-agent">Find more</a>                                        
                    </div>
                </div><!-- Follow Widget -->

                <div class="search_widget widget">
                    <div class="heading2">
                        <h3>SEARCH VEHICULS</h3>
                    </div>
                    <div class="search-form"> 
                        <form action="vehiculs.html"  method="get" class="form-inline">   
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
                                               data-slider-value="[0,60000]" id="price-range" >
                                    </div>
                                    <div class="form-group col-md-12">
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
                </div><!-- Category Widget -->
            </aside>
        </div>

        <div class="related-vehiculs-">
            <div class="heading3">
                <h3>RELATED VEHICULS</h3>
                <span>Lorem ipsum dolor amet</span>
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
                            <span class="price">$340000</span>
                        </div>
                    </div> 
                    <div class="item">
                        <div class="vehiculs-box">
                            <div class="vehiculs-thumb">
                                <img src="/img/demo/vehicul1.jpg" alt="" /> 
                                <span class="spn-status"> Damaged</span>
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
                            <span class="price">$340000</span>
                        </div>
                    </div> 
                    <div class="item">
                        <div class="vehiculs-box">
                            <div class="vehiculs-thumb">
                                <img src="/img/demo/vehicul1.jpg" alt="" /> 
                                <span class="spn-status"> Damaged</span>
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
                            <span class="price">$340000</span>
                        </div>
                    </div> 
                    <div class="item">
                        <div class="vehiculs-box">
                            <div class="vehiculs-thumb">
                                <img src="/img/demo/vehicul1.jpg" alt="" /> 
                                <span class="spn-status"> Damaged</span>
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
                            <span class="price">$340000</span>
                        </div>
                    </div> 
                    <div class="item">
                        <div class="vehiculs-box">
                            <div class="vehiculs-thumb">
                                <img src="/img/demo/vehicul1.jpg" alt="" /> 
                                <span class="spn-status"> Damaged</span>
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
                            <span class="price">$340000</span>
                        </div>
                    </div> 
                    <div class="item">
                        <div class="vehiculs-box">
                            <div class="vehiculs-thumb">
                                <img src="/img/demo/vehicul1.jpg" alt="" /> 
                                <span class="spn-status"> Damaged</span>
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
                            <span class="price">$340000</span>
                        </div>
                    </div> 
                </div>
            </div>
        </div><!-- Related Posts -->

    </div>
</div>
</div>
</section>

@endsection


