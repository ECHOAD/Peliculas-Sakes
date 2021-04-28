
    <header>

    </header>

    <aside>
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="{{ route('home') }}" class="nav__logo">
                        <span class="nav__logo-text ">SAKE</span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>
    
                    <ul class="nav__list}}">

                   
                        
                       

                        <a href="{{ route('home') }}" class="nav__link {{ setActive('home') }}">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">Inicio</span>
                        </a>
                 
                  
                        <a href="{{ route('trailers.index') }}" class="nav__link {{ setActive('trailers*') }}">
                            <i class='bx  bx-key  nav__icon'></i>
                            <span class="nav__text">Administrar Peliculas</span>
                        </a>    
                        
                        @guest

                        <div class="nav__text">


                            <a class="nav__link"  href="{{ route('login') }}">
                                <i class='bx bx-log-in nav__icon'></i>    
                                <span class="nav__text"> Iniciar Sesion</span>
                            </a>
                            @if (Route::has('register'))
                            
                            
                            <a class="nav__link"  href="{{ route('register') }}">
                                <i class='bx bx-news nav__icon'></i> 
                                <span class="nav__text">Registrar</span>

                            </a>
                            
                        </div>
                       
                        @endif
                       @else
                    
                    </ul>
                </div>



                <div class="nav__text">
                    <a  class="nav__link  ">
                        <i class='bx bx-user nav__icon' ></i>
                        <span class="nav__text ">{{ Auth::user()->name==null? 'Usuario':Auth::user()->name ,'Usuario'}}</span>
                    </a>

                    <a class="nav__link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class='bx bx-log-out-circle nav__icon'></i>
                     <span >Cerrar Sesion</span>
                    </a>
    



                </div>

         
              
            
            
             
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

             @endguest
              
            </nav>
        </div>
    </aside>
