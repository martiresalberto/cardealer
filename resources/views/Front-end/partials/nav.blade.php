<header class="simple-header for-sticky ">
<div class="top-bar">
<div class="container">
    <ul class="contact-item">
        <li><i class="fa fa-envelope-o"></i>yourcompnay@email.com</li>
        <li><i class="fa fa-mobile"></i>+1 333 44 555 / +1 333 44 500</li>
    </ul>
    <div class="choose-language">
        <a href="#" title="">FR</a>
        <a href="#" title="">DE</a>
        <a href="#" title="">EN</a>
        <a href="#" title="">jp</a>
    </div>
</div>
</div><!-- Top bar -->
<div class="menu">
<div class="container">
    <div class="logo">
        <a href="{{ url('/') }}" title="">
            <i class="fa fa-get-pocket"></i>
            <span>CarDealer</span>
            <strong>SELL VEHICULS</strong>
        </a>
    </div><!-- LOGO -->
@guest

    <div class="popup-client">
        <span><i class="fa fa-user"></i>  Signup</span>
    </div>

@else    

    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
    
    <nav>
        <h1 class="nocontent outline">--- Main Navigation ---</h1>
        <ul>  
            

       
         
            <li class="menu-item">
                <a href="{{ url('home') }}" title="">Admin</a>
            </li>

    
        
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
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