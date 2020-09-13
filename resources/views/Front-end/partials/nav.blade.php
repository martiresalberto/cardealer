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
                                    class="fa fa-home fa-lg"></i></a>
                        </li>

                        <li class="menu-item-has-children">
                            <a title="">Predio de Cabezales <i
                                class="fa fa-truck fa-lg"></i></a>
                            <ul>
                                <li><a href="{{ route('cabezales-reciente-ingreso') }}" title="">Cabezales reciente ingreso </a></li>       
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a title="">Predio de Furgones <i
                                class="fa fa-truck fa-lg"></i></a>
                            <ul>
                                <li><a href="#" title="">Furgones reciente ingreso </a></li>       
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a title="">Predio de Carros <i
                                class="fa fa-truck fa-lg"></i></a>
                            <ul>
                                <li><a href="#" title="">Carros reciente ingreso </a></li>       
                            </ul>
                        </li>

                          <li class="menu-item">
                            <a href="{{ url('login') }}" title="" style="text-decoration: none;">Iniciar sesion <i
                                    class="fa fa-sign-in fa-lg"></i></a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ url('register') }}" title="" style="text-decoration: none;">Registrar <i
                                    class="fa fa-user fa-lg"></i></a>
                        </li>  
            

                    @else

                        <li class="menu-item">
                            <a href="{{ url('/') }}" title="" style="text-decoration: none;">Inicio <i
                                    class="fa fa-home fa-lg"></i></a>
                        </li>
        
                        <li class="menu-item-has-children">
                            <a title=""> Predio Cabezales <i
                                class="fa fa-truck fa-lg"></i></a>
                            <ul>
                                <li><a href="{{ route('cabezales-reciente-ingreso') }}" title="">Cabezales reciente ingreso </a></li>       
                            </ul>
                        </li>

                         <li class="menu-item">
                            <a href="{{ url('mensaje') }}" title="" style="text-decoration: none;">Enviar mensaje 
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li> 

                        <li class="menu-item">
                            <a href="{{ url('verNotificacionesUsuario') }}" title="" style="text-decoration: none;">Notificacion <span
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
                              @else
                              <li><a href="{{ url('miperfil') }}" title="">Mi perfil</a></li>
                              @endif

                              <li>
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <p>
                                  Cerrar sesion
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
