  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

   

  </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="images/logo.png" alt="CarDealer" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CarDealer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
     <div id="app"> 

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if (Auth::user()->image)
           <img src="{{ asset('/storage/imagesUser/'.Auth::user()->image) }}" alt="imagen">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block"> Usuario : {{ Auth::user()->name}}</a>
        </div>
      </div>

    </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt  red"></i>
               <p>
                Inicio
               </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('miperfil') }}" class="nav-link">
              <i class="nav-icon fas fa-user red"></i>
               <p>
                Mi perfil
               </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/mensajes') }}" class="nav-link">
              <i class="nav-icon fas fa-envelope red"></i>
               <p>
                Mensajes
               </p>
                <span style="width:20px; height:15px;" class="badge bg-white"> 1</span>
            </a>
          </li>  

          @if ( @auth()->user()->hasRoles(['admin']) )

          <li class="nav-item">
            <a href="{{ url('predio') }}" class="nav-link">
              <i class="nav-icon fas fa-car red"></i>
               <p>
                Predio
               </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('category') }}" class="nav-link">
              <i class="nav-icon fas fa-list red"></i>
               <p>
                Categorias 
               </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('condicion') }}" class="nav-link">
              <i class="nav-icon fas fa-car-crash red"></i>
               <p>
                Condicion
               </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{ url('users') }}" class="nav-link">
              <i class="nav-icon fas fa-users red"></i>
               <p>
                Usuarios
               </p>
            </a>
          </li>
 
          
          @endauth 

         <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt red"></i> 
                 <p>
                   Cerrar sesion
                 </p>
               </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
