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
            <a href="{{ url('/') }}" title="" style="text-decoration: none;">Inicio</a>
        </li>

        <li class="menu-item">
            <a href="{{ url('cabezales') }}" title="" style="text-decoration: none;">Cabezales</a>
        </li>

        <li class="menu-item">
            <a href="" title="" style="text-decoration: none;">Contacto</a>
        </li>

        <li class="menu-item">
            <a href="" title="" style="text-decoration: none;">Acerca de</a>
        </li>

        <li class="menu-item">
            <a href="{{ url('login') }}" title="" style="text-decoration: none;">Iniciar secion</a>
        </li>

        <li class="menu-item">
            <a href="{{ url('register') }}" title="" style="text-decoration: none;">Registrarce</a>
        </li>

    @else    
    
        <li class="menu-item">
            <a href="{{ url('/') }}" title="" style="text-decoration: none;">Inicio</a>
        </li>

        <li class="menu-item">
            <a href="{{ url('cabezales') }}" title="" style="text-decoration: none;">Cabezales</a>
        </li>

        <li class="menu-item">
            <a href="" title="" style="text-decoration: none;">Contacto</a>
        </li>

        <li class="menu-item">
            <a href="" title="" style="text-decoration: none;">Acerca de</a>
        </li>
        
        <li class="menu-item">
            <a href="{{ url('home') }}" title="" style="text-decoration: none;">Administrar pagina</a>
        </li>
        
        <li class="menu-item">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar cesion
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