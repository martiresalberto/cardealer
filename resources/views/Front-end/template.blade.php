
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



    @include('front-end.partials.account-popup-sec')

    @include('front-end.partials.nav')
          

       @yield('content') 
 

    @include('front-end.partials.footer')


</div>

@section('Script')

<!-- Script -->
<script src="{{ asset('js/modernizr.js') }}"></script><!-- Modernizer -->
<script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script><!-- Jquery -->


<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
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