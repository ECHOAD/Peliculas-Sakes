
    <header>

    </header>

    <aside>
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="{{ route('trailers.home') }}" class="nav__logo">
                        <span class="nav__logo-text">SAKE</span>
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>
    
                    <ul class="nav__list">
                        <a href="#" class="nav__link active">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">Home</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__text">User</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-bell nav__icon' ></i>
                            <span class="nav__text">Notification</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-heart nav__icon'></i>
                            <span class="nav__text">Favorites</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon'></i>
                            <span class="nav__text">Saved</span>
                        </a>            
                        <a href="{{ route('trailers.index') }}" class="nav__link">
                            <i class='bx  bx-key  nav__icon'></i>
                            <span class="nav__text">Administrar Peliculas</span>
                        </a>      
                    </ul>
                </div>
                <a href="#" class="nav__link">           
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Close</span>
                </a>
            </nav>
        </div>
    </aside>
