
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CarDealer</title>

<!-- Styles -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="fonts/themify-icons/themify-icons.css" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" /><!-- Owl Carousal-->
<link rel="stylesheet" href="css/price-range.css" type="text/css" /><!-- Owl Carousal -->

<link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
<link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
<link rel="stylesheet" href="css/colors.css" type="text/css" /><!-- color -->	

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css">

</head>
<body>

<!-- /.preloader -->
<div id="preloader"></div>
<div class="theme-layout" id="app">

<div class="account-popup-sec"> 

<div class="account-popup-area">
    <div class="account-popup">
        <div class="row">
            <div class="col-md-6">
                <div class="account-user">
                    <div class="logo">
                        <a href="#" title="">
                            <i class="fa fa-get-pocket"></i>
                            <span>KwitaraCars</span>
                            <strong>SELL VEHICULS</strong>
                        </a>
                    </div><!-- LOGO -->
                    
                    <form method="POST" action="{{ route('login') }}">
                     @csrf

                       <h1>Login Form</h1>
                       
                       <div class="form-group row">
                        <div class="field">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       </div>

                       <div class="form-group row">  
                        <div class="field">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="Password"/>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       </div>

                       <div class="form-group row"> 
                        <div class="field">

                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        
                        </div>
                       </div>
                    </form>
                    
                    <i>OR</i>
                    
                    <span>LOGIN WITH</span>
                    
                    <ul class="social-btns">
                        <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                
                </div>
            
            </div>
            <div class="col-md-6">
                <div class="registration-sec">
                    <h1>SIGNUP Form</h1>
                    
                      <form method="POST" action="{{ route('register') }}">
                       @csrf

                       <div class="form-group row">
                        <div class="field">
                            <input id="name" type="text" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       </div>
                       <div class="form-group row">
                        <div class="field">
                            <input id="email" type="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />

                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       </div>
                        
                       <div class="form-group row"> 
                        <div class="field">
                            <input id="password" type="password" placeholder="Type Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                       </div>

                       <div class="form-group row"> 
                        <div class="field">
                            <input type="password" placeholder="Retype Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                        </div>                                   
                       </div>

                        {{-- <label>
                            <input type="checkbox" /> By Clicking on this You are agree with our <a href="#" title="">Terms & Condition</a>
                        </label> --}}
                       
                       <div class="form-group row mb-0"> 
                        <input type="submit" value="Singup Now" class="flat-btn" />
                       </div>

                    </form>
                
                </div><!-- Registration sec -->
            </div>
        </div>
        <span class="close-popup"><i class="fa fa-close"></i></span>
    </div>
</div>
</div><!-- Account Popup Sec -->


<header class="simple-header for-sticky ">
<div class="top-bar">
    <div class="container">
        <ul class="contact-item">
            <li><i class="fa fa-envelope-o"></i>yourcompnay@email.com</li>
            <li><i class="fa fa-mobile"></i>+1 333 44 555 / +1 333 44 500</li>
        </ul>
        <div class="choose-language">
            <a href="#" title="">FR</a>
            <a href="#" title="">DE</a>
            <a href="#" title="">EN</a>
            <a href="#" title="">jp</a>
        </div>
    </div>
</div><!-- Top bar -->
<div class="menu">
    <div class="container">
        <div class="logo">
            <a href="index.html" title="">
                <i class="fa fa-get-pocket"></i>
                <span>CarDealer</span>
                <strong>SELL VEHICULS</strong>
            </a>
        </div><!-- LOGO -->
    @guest
    
        <div class="popup-client">
            <span><i class="fa fa-user"></i>  Signup</span>
        </div>
    
    @else    
    
       
    

        <span class="menu-toggle"><i class="fa fa-bars"></i></span>
        
        <nav>
            <h1 class="nocontent outline">--- Main Navigation ---</h1>
            <ul>
                <li class="menu-item-has-children">
                    <a href="#" title="">HOME</a>
                    <ul>
                        <li><a href="index.html" title="">Home v1</a></li>
                        <li><a href="index2.html" title="">Home v2</a></li>
                        <li><a href="index3.html" title="">Home v3</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#" title="">VEHICULS</a>
                    <ul>
                        <li><a href="vehiculs3.html" title="">vehiculs- Super </a></li>       
                        <li><a href="vehiculs.html" title="">vehiculs- List</a></li>
                        <li><a href="vehiculs2.html" title="">vehiculs- Grid</a></li>                             
                        <li><a href="vehicul.html" title="">vehicul details</a></li>              
                    </ul>
                </li>
                <li><a href="vehicul.html" title="">VEHICUL</a></li>

                <li class="menu-item-has-children mega">
                    <a href="#" title="">PAGES</a>
                    <ul>                                    
                        <li><a href="comingsoon.html" title="">Coming Soon</a></li> 
                        <li><a href="agents-listing.html" title="">Agent Listing </a></li> 
                        <li><a href="terms-conditions.html" title="">Terms & conditions</a></li> 

                        <li><a href="agent.html" title="">Agent page</a></li> 
                        <li><a href="agent2.html" title="">Agent 2 page</a></li> 
                        <li><a href="agent3.html" title="">Agent 3 page</a></li> 

                        <li><a href="my-profile.html" title="">Profile page</a></li>
                        <li><a href="submit.html" title="">Submit page</a></li>
                        <li><a href="login.html" title="">Login page</a></li>

                        <li><a href="contact.html" title="">Contact Us</a></li>
                        <li><a href="404.html" title="">404 Error </a></li> 
                        <li><a href="faq.html" title="">FAQ page</a></li>
                        <li><a href="faq.html" title="">VEHICUL LEFT SIDE</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="#" title="">BLOG PAGES</a>
                    <ul>
                        <li><a href="blog.html" title="">Blog Page</a></li>
                        <li><a href="blog-sidebar.html" title="">Blog left Sidebar</a></li>
                        <li><a href="single.html" title="">Single Post</a></li>
                        <li><a href="single-left-sidebar.html" title="">Single Left sidebar</a></li>
                        <li><a href="single-no-sidebar.html" title="">Single No Sidebar</a></li>
                    </ul>
                </li>

                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    LOGOUT
                   </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

    </div>
    @endguest
</div>
</header>        

<div id="rev_slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" >
<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul> 

          @foreach($cabezales as $cab)

            <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" 
                data-saveperformance="on"  data-title="Ken Burns Slide">
                <!-- MAIN IMAGE -->
                <img src="{{ Storage::url($cab->imgCabezal) }}"  alt="2" data-lazyload="{{ Storage::url($cab->imgCabezal) }}" 
                     data-bgposition="right top" data-kenburns="off" data-duration="12000" 
                     data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" 
                     data-bgpositionend="center bottom">
                <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                     data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                     data-y="130" data-hoffset="0" data-x="center"
                     style="">
                    <img alt="" src="img/4.png" style="width: 110px; height: 110px;">
                </div>
                <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                     data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                     data-y="272" data-hoffset="0" data-x="center"
                     style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                     font-weight: 400;">
                    Mercedes-Benz
                </div>
                <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" 
                     data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320" 
                     data-hoffset="0" data-x="center"
                     style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                    <i class="fa fa-map-marker"> </i> Not caroliana 234 
                </div>
                <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                     data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                     data-y="365" data-hoffset="0" data-x="center"
                     style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                     font-family: Montserrat; font-weight: 400;">
                    345000 $
                </div>
                <a href="vehicul.html" class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                   data-x="center"
                   data-y="420"
                   data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                   scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                   data-speed="500"
                   data-start="1200"
                   data-easing="Power3.easeInOut"
                   data-splitin="none"
                   data-splitout="none"
                   data-elementdelay="0.1"
                   data-endelementdelay="0.1"
                   data-linktoslide="next"
                   style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                   color: #fff;text-transform: uppercase;
                   border: none; background:#000;
                   font-size: 12px; letter-spacing: 3px;
                   font-family: Montserrat; border-radius: 0px;
                   display: table; transition: .4s;">More Details</a>

            </li> 

          @endforeach

        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>
</div><!-- END REVOLUTION SLIDER -->

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

<section class="block remove-top">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="heading4">
                <h2>RECENT VEHICULS </h2>
                <span>Lorem ipsum dolor</span>
            </div>
            <div class="vehiculs-sec">
                <div class="carousel-prop">
                   
                  @foreach($cabezales as $cab)  

                    <div class="vehiculs-box">
                        <div class="vehiculs-thumb">
                            <img src="{{ Storage::url($cab->imgCabezal) }}" alt="" /> 
                            <span class="spn-status"> Damaged</span>
                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                            <div class="user-preview">
                                <a class="col" href="agent.html">
                                    <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                </a> 
                            </div>
                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                            <p class="car-info-smal">
                                Registration {{ $cab->modelo }}<br>
                                {{ $cab->type_motor }}<br>
                                230 HP<br>
                                Body Coupe<br>
                                80 000 Miles
                            </p>
                        </div>
                        <h3><a href="vehicul.html" title="Mercedes-Benz">{{ $cab->name_marca }}</a></h3>
                        <span class="price">${{ $cab->price }}</span>
                    </div> 
                    
                  @endforeach

                </div><!-- Carousel -->
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
                <h3>Sell or Rent  <span> vehiculs </span>Quickly ! </h3>
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
                  
                   @foreach($cabezales as $cab)
                   
                    <div class="col-md-4">
                        <div class="vehiculs-box">
                            <div class="vehiculs-thumb">
                                <img src="{{ Storage::url($cab->imgCabezal) }}" alt="" />
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
                <h2>OUR AGENTS</h2>
                <span>Lorem ipsum dolor</span>
            </div>
            <div class="agents-carousal-sec">
                <ul class="carousel">
                    <li>
                        <div class="agent-content">
                            <a href="agent.html"><img src="img/agents/agent1.jpg" alt="" /></a>
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
                            <a href="agent.html"><img src="img/agents/agent3.jpg" alt="" /></a>
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
                            <a href="agent.html"><img src="img/agents/agent5.jpg" alt="" /></a>
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
                            <a href="agent.html"><img src="img/agents/agent4.jpg" alt="" /></a>
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

<footer>
<section class="top-line">
    <div style="background: url(img/footer.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
    <div class="container">
        <div class="row">   

            <div class="col-md-3 column">
                <div class="about_widget widget">
                    <div class="heading1">
                        <h2><span>Useful</span> links</h2>
                    </div><!-- heading -->

                    <span><i class="fa fa-envelope"></i>yourcompany@gmail.com</span>
                    <span><i class="fa fa-phone"></i>0888 (29999996)</span>
                    <span><i class="fa fa-location-arrow"></i>1234 Tokyo shibuia , WI 54115</span>
                    <ul class="social-btns">
                        <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 column">
                <div class="links_widget widget">
                    <div class="heading1">
                        <h2><span>Useful</span> links</h2>
                    </div><!-- heading -->
                    <ul>
                        <li><a href="#" title=""><i class="fa fa-angle-right"></i> Home</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
                        <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
                    </ul>
                </div>
            </div>

            <div class="col-md-3 column">
                <div class="links_widget widget">
                    <div class="heading1">
                        <h2><span>Useful</span> Places</h2>
                    </div><!-- heading -->
                    <ul>
                        <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem ipsum </a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-right"></i> Closest ipsum </a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem dolom </a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-right"></i> Positioned ipl</a></li> 
                    </ul>
                </div>
            </div>

            <div class="col-md-3 column">
                <div class="subscribe_widget widget">
                    <div class="heading1">
                        <h2><span>Subscribe</span> Us</h2>
                    </div><!-- heading -->
                    <p>Positioning the closest positioned for abs positioning</p>
                    <form>
                        <label><input type="text" placeholder="TYPE YOUR EMAIL" /></label>
                        <button type="submit" class="flat-btn"><i class="ti ti-email"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="bottom-line">
    <div class="container">
        <span>Copyright All Right Reserved 2016 <a href="#" title="">KimaroTec</a></span>
        <ul>
            <li><a title="" href="#">HOME</a></li>
            <li><a title="" href="#">ABOUT</a></li>
            <li><a title="" href="#">VEHICULS</a></li>
            <li><a title="" href="#">BLOG</a></li>
            <li><a title="" href="#">CONTACT</a></li>
        </ul>
    </div>
</div>
<a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
</footer>

</div>

<!-- Script -->
<script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script><!-- Jquery -->
<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript" src="js/html5lightbox.js"></script><!-- HTML -->
<script type="text/javascript" src="js/scrolly.js"></script><!-- Parallax -->
<script type="text/javascript" src="js/price-range.js"></script><!-- Parallax -->
<script type="text/javascript" src="js/script.js"></script><!-- Script -->

<script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
"use strict";
jQuery('.tp-banner').show().revolution({
    dottedOverlay: "none",
    delay: 16000,
    startwidth: 1170,
    startheight: 700,
    hideThumbs: 200,
    thumbWidth: 100,
    thumbHeight: 50,
    thumbAmount: 5,
    navigationType: "bullet",
    navigationArrows: "solo",
    navigationStyle: "preview1",
    touchenabled: "on",
    onHoverStop: "on",
    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,
    parallax: "mouse",
    parallaxBgFreeze: "on",
    parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
    keyboardNavigation: "off",
    navigationHAlign: "center",
    navigationVAlign: "bottom",
    navigationHOffset: 0,
    navigationVOffset: 20,
    soloArrowLeftHalign: "left",
    soloArrowLeftValign: "center",
    soloArrowLeftHOffset: 20,
    soloArrowLeftVOffset: 0,
    soloArrowRightHalign: "right",
    soloArrowRightValign: "center",
    soloArrowRightHOffset: 20,
    soloArrowRightVOffset: 0,
    shadow: 0,
    fullWidth: "on",
    fullScreen: "off",
    spinner: "spinner4",
    stopLoop: "off",
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: "off",
    autoHeight: "off",
    forceFullWidth: "off",
    hideThumbsOnMobile: "off",
    hideNavDelayOnMobile: 1500,
    hideBulletsOnMobile: "off",
    hideArrowsOnMobile: "off",
    hideThumbsUnderResolution: 0,
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    startWithSlide: 0,
    videoJsPath: "rs-plugin/videojs/",
    fullScreenOffsetContainer: ""
});

$(".carousel-prop").owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 2000,
    loop: true,
    dots: true,
    nav: false,
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

$(".carousel").owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 2000,
    loop: false,
    dots: false,
    nav: true,
    margin: 0,
    items: 3
});

$(".carousel-client").owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 2000,
    loop: false,
    dots: false,
    nav: true,
    margin: 30,
    items: 5,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 3,
            nav: true
        },
        1000: {
            items: 5,
            nav: true,
            loop: false
        }
    }
});

});
</script>
</body>
</html>