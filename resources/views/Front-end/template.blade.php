
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CarDealer</title>

@yield('styles')

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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>
<body>

   @include('Front-end.partials.account-popup-sec')

   @include('Front-end.partials.nav')

   @yield('content')

   @include('Front-end.partials.footer')

@yield('script')

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


</body>
</html>
