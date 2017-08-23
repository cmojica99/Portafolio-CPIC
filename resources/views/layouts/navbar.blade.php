    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    @if(Auth::check())
                        <a href="{{ url('welcome') }}" class="navbar-brand" href="#">PORTAFOLIO</a>
                      @else
                        <a href="{{ url('/') }}" class="navbar-brand" href="#">PORTAFOLIO</a>
                      @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="nav navbar-nav navbar-right">
                    
                        
                        <li class="sub_top"><a class="pop" href=""> PROGRAMAS DE FORMACION </a>
                            <ul class="sub_cate">
                                <li class="sub_menu2">
                                    <a class="redirect" href="">Formacion Titulada</a>
                                </li>
                                <li class="sub_menu2">
                                    <a class="redirect" href="">Formacion Complementaria</a>
                                </li>
                                <li class="sub_menu2">
                                    <a class="redirect" href="">Formacion Virtual</a>
                                </li>
                            </ul>
                        </li>
                    
                        
                   
                          
                        

                        <li><a class="pop" href="{{ url('/contact')}}"> CONTACTANOS </a></li>
                    
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="pop" href="{{ route('login') }}">INICIAR SESION</a></li>
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>