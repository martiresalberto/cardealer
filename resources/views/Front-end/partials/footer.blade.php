<footer>

<div class="bottom-line">
<div class="container">
    <span>Derechos reservados 2020 <a href="#" title="">Cardealer</a></span>
    <ul>
     @guest
     
     <li><a title="" href="{{ url('/') }}">INICIO</a></li>
      <li><a title="" href="#">CABEZALES</a></li>
      <li><a title="" href="#">CONTACTO</a></li>
      <li><a title="" href="#">ACERCADE</a></li>
      <li><a  href="{{ url('login') }}">LOGIN</a></li>
      <li><a  href="{{ url('register') }}">REGISTER</a></li>
     
      @else
      
      <li><a title="" href="{{ url('/') }}">INICIO</a></li>
      <li><a title="" href="#">CABEZALES</a></li>
      <li><a title="" href="#">CONTACTO</a></li>
      <li><a title="" href="#">ACERCADE</a></li>
      <li><a title="" href="{{ url('home') }}">ADMINISTRACION PAGINA</a></li>
      
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar cesion
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
      
      @endguest  
    </ul>
</div>
</div>
<a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
</footer>