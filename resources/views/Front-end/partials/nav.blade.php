<header class="simple-header for-sticky ">
    <div class="top-bar">
        <div class="container">
            <ul class="contact-item">
                <li><i class="fa fa-envelope"></i>transventasgt@gmail.com</li>
                <li><i class="fa fa-phone"></i>43745326</li>
            </ul>
            <div class="choose-language">
                <a href="#" title="" style="text-decoration: none;">EN</a>
                <a href="#" title="" style="text-decoration: none">ES</a>
            </div>
        </div>
    </div><!-- Top bar -->

    <div class="menu">
        <div class="container">

            <span class="menu-toggle"><i class="fa fa-bars"></i></span>

            <nav>

                <h1 class="nocontent outline">--- Main Navigation ---</h1>

                <ul>

                    @guest

                        <li class="menu-item">
                            <a href="{{ url('/') }}" title="" style="text-decoration: none;">Inicio <i class="fas fa-home fa-lg"></i></a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('cabezales') }}" title="" style="text-decoration: none;">Cabezales <i class="fas fa-truck fa-lg"></i></a>
                        </li>

                        <li class="menu-item">
                            <a href="" title="" style="text-decoration: none;">Acerca de <i class="fas fa-door-open fa-lg"></i></a>
                        </li>

                        <li class="menu-item">
                            <a href="" title="" style="text-decoration: none;">Ubicacion <span style="width:20px; height:15px;"> <i class="fas fa-map-marked-alt fa-lg"></i></span></a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('login') }}" title="" style="text-decoration: none;">Iniciar sesion <i class="fas fa-sign-in-alt fa-lg"></i></a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('register') }}" title="" style="text-decoration: none;">Registrar <i class="fas fa-user fa-lg"></i></a>
                        </li>


                    @else

                        <li class="menu-item">
                            <a href="{{ url('/') }}" title="" style="text-decoration: none;">Inicio <i class="fas fa-home fa-lg"></i></a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('cabezales') }}" title="" style="text-decoration: none;">Cabezales <i class="fas fa-truck fa-lg"></i></a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('mensaje') }}" title="" style="text-decoration: none;">Enviar Mensaje <i class="fas fa-envelope fa-lg"></i></a>
                        </li>

                        <li class="menu-item">
                            <a href="" title="" style="text-decoration: none;">Mensajes recibidos <span style="width:25px; height:15px;" class="badge bg-white"><strong>245</strong></span></a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('home') }}" title="" style="text-decoration: none;">Admin </a>
                            @if (Auth::user()->image)
                                <img src="{{ asset('/storage/imagesUser/' . Auth::user()->image) }}" style="margin-left: 1rem;" width="40px" alt="imagen">
                            @endif
                        </li>

                    </ul>

                </nav>

            </div>

        @endguest

    </div>

</header>
