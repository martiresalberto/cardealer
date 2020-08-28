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
                            <a href="{{ url('/') }}" title="" style="text-decoration: none;">Inicio <i
                                    class="fas fa-home fa-lg"></i></a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="{{ url('cabezales') }}" title="">Cabezales <i
                                class="fas fa-truck fa-lg"></i></a>
                            <ul>
                                <li><a href="#" title="">Cabezales reciente ingreso </a></li>       
                                <li><a href="#" title="">Cabezales listos para trabajar</a></li>
                                <li><a href="#" title="">Cabezales por ingresar</a></li>                             
                                <li><a href="#" title="">Cabezales sin garantia</a></li>              
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('ubicacion') }}" title="" style="text-decoration: none;">Ubicacion <span
                                    style="width:20px; height:15px;"> <i class="fas fa-map-marked-alt fa-lg"></i></span></a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('login') }}" title="" style="text-decoration: none;">Iniciar sesion <i
                                    class="fas fa-sign-in-alt fa-lg"></i></a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('register') }}" title="" style="text-decoration: none;">Registrar <i
                                    class="fas fa-user fa-lg"></i></a>
                        </li>


                    @else

                        <li class="menu-item">
                            <a href="{{ url('/') }}" title="" style="text-decoration: none;">Inicio <i
                                    class="fas fa-home fa-lg"></i></a>
                        </li>
        
                        <li class="menu-item-has-children">
                            <a href="{{ url('cabezales') }}" title="">Cabezales <i
                                class="fas fa-truck fa-lg"></i></a>
                            <ul>
                                <li><a href="#" title="">Cabezales reciente ingreso </a></li>       
                                <li><a href="#" title="">Cabezales listos para trabajar</a></li>
                                <li><a href="#" title="">Cabezales por ingresar</a></li>                             
                                <li><a href="#" title="">Cabezales sin garantia</a></li>              
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('detalle-mensaje') }}" title="" style="text-decoration: none;">Notificacion <span
                                    style="width:25px; height:15px;" class="badge bg-white"><strong>4</strong></span></a>
                        </li>

                            
                        <li class="menu-item-has-children">
                            <a href="#" title="" style="text-decoration: none;"> {{ Auth::user()->name}}</a>
                            @if (Auth::user()->image)
                            <img src="{{ asset('/storage/imagesUser/' . Auth::user()->image) }}"
                                    style="margin-left: 1rem;" width="50px" alt="imagen">
                            @endif
                            <ul>
                            @if ( @auth()->user()->hasRoles(['admin']) )
                              <li><a href="{{ url('home') }}" title="">Admin</a></li>
                            @endif
                              <li><a href="{{ url('miperfil') }}" title="">Mi perfil</a></li>

                              <li>
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <p>
                                  Salir
                                </p>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                              </li>
                             
                            </ul>
                        </li>
                        

                    </ul>

                </nav>

            </div>

        @endguest

    </div>

</header>
