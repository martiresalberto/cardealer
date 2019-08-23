<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarDealer</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{ asset('fonts/themify-icons/themify-icons.css') }}" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" /><!-- Owl Carousal-->
    <link rel="stylesheet" href="{{ asset('css/price-range.css') }}" type="text/css" /><!-- Owl Carousal -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css" /><!-- color -->	

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js/rs-plugin/css/settings.css') }}">

</head>
<body>

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">
        
        @include('Front-end.partials.nav')
        
         @yield('content') 

         @yield('horizontal-search')

         @yield('blockremove-top')

         @yield('blockuno')

         @yield('FeaturedVehiculs')

         @yield('blockdos')

         @yield('OurPartners') 
        
        @include('Front-end.partials.footer')   

        

    </div>

    @section('scrips')

    <!-- Script -->
    <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script><!-- Modernizer -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script><!-- Jquery -->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script><!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('js/html5lightbox.js') }}"></script><!-- HTML -->
    <script type="text/javascript" src="{{ asset('js/scrolly.js') }}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{ asset('js/price-range.js') }}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script><!-- Script -->

    <script src="{{ asset('js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>   
    <script src="{{ asset('js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script src="{{ asset('js/document.js') }}">
    </script>


    @show

    

   

</body>
</html>