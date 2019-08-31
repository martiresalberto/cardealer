
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CarDealer</title>

@section('head')

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" /><!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="{{ asset('fonts/themify-icons/themify-icons.css') }}" type="text/css" /><!-- Icons -->
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" /><!-- Owl Carousal-->
<link rel="stylesheet" href="{{ asset('css/price-range.css') }}" type="text/css" /><!-- Owl Carousal -->

<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" /><!-- Style -->	
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" /><!-- Responsive -->	
<link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" /><!-- color -->	

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="{{ asset('js/rs-plugin/css/settings.css') }}">



@show
    
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


    @include('front-end.partials.nav')
          

       @yield('content') 
 

    @include('front-end.partials.footer')


</div>

@section('Script')

<!-- Script -->
<script src="{{ asset('js/modernizr.js') }}"></script><!-- Modernizer -->
<script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script><!-- Jquery -->


<script src="{{ asset('js/bootstrap.min.js') }}"></script><!-- Bootstrap -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- Owl Carousal -->
<script src="{{ asset('js/html5lightbox.js') }}"></script><!-- HTML -->
<script src="{{ asset('js/scrolly.js') }}"></script><!-- Parallax -->
<script src="{{ asset('js/price-range.js') }}"></script><!-- Parallax -->
<script src="{{ asset('js/script.js') }}"></script><!-- Script -->


<script src="{{ asset('js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>   
<script src="{{ asset('js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>


 

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

@show


</body>
</html>