<header class="simple-header for-sticky white">
    <div class="top-bar">
        <div class="container">
            <ul class="contact-item">
                <li><i class="fa fa-envelope-o"></i>Transventas7@gmail.com</li>
                <li><i class="fa fa-mobile"></i>+502 43745326</li>
            </ul>
            <div class="choose-language">
                <a href="#" title="">ES</a>
                <a href="#" title="">EN</a>

            </div>
        </div>
    </div><!-- Top bar -->
    <div class="menu">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/') }}" alt="Ir a pagina de Inicio">
                    <i class="fa fa-get-pocket"></i>
                    <span>TrasnVentas</span>
                    <strong>Venta de cabezales</strong>
                </a>
            </div>


            <!-- LOGO -->

            <span class="menu-toggle"><i class="fa fa-bars"></i></span>

            <nav>
                <h1 class="nocontent outline">--- Main Navigation ---</h1>

                <ul>

                    @guest

                        <div class="popup-client">
                            <span><i class="fa fa-user"></i> / Iniciar Sesion</span>
                        </div>


                        <li class="menu-item">
                            <a href="{{ url('/') }}" title="" style="text-decoration: none;">Inicio <iclass="fa fa-home fa-lg"></i></a>
                        </li>

                        <li class="menu-item-has-children">
                            <a title="">Predio <i class="fa fa-truck fa-lg"></i></a>
                            <ul>
                                <li><a href="" title="">Cabezales</a></li>
                            </ul>
                        </li>

                    @else

                        <li class="menu-item">
                            <a href="{{ url('/') }}" title="" style="text-decoration: none;">Inicio<i
                                    class="fa fa-home fa-lg"></i></a>
                        </li>

                        <li class="menu-item-has-children">
                            <a title="">Predio<i class="fa fa-truck fa-lg"></i></a>
                            <ul>
                                <li><a href="" title="">Cabezales</a></li>
                                <li><a href="" title="">Furgones</a></li>
                                <li><a href="" title="">Carros</a></li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('mostrarmensajeadmin') }}" title="" style="text-decoration: none;">Notificaciones<span class="badge">1</span>
                             @if ($count = Auth::user()->unreadNotifications->count())
                                <span style="width:25px; height:15px;" class="badge bg-white"><strong>{{ $count }}</strong></span>
                             @endif
                            </a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#" title="" style="text-decoration: none;"> {{ Auth::user()->name }}</a>
                            @if (Auth::user()->image)
                                <img src="{{ asset('/storage/imagesUser/' . Auth::user()->image) }}"
                                    style="margin-left: 1rem;" width="50px" alt="imagen">
                            @endif
                            <ul>
                                @if (@auth()->user()->hasRoles(['admin']))
                                    <li><a href="{{ url('home') }}" title="">Administracion pagina</a></li>
                                @else
                                    <li><a href="{{ url('miperfil') }}" title="">Mi Perfil</a></li>
                                @endif

                                <li>
                                    <a href="{{ route('logout') }}" class="nav-link"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <p>
                                            Cerrar sesion
                                        </p>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>

                    @endguest

                </ul>
            </nav>
        </div>
    </div>
</header>
