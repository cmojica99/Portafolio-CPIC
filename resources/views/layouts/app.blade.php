<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PORTAFOLIO') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css')}}">
    <link rel="stylesheet" href="{{ asset('css/master.css')}}">
<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/master.css')}}">
=======
>>>>>>> d68c58069776e5afabfcc799e2ba7a0507a8fd06
=======

    <link rel="stylesheet" href="{{ asset('css/master.css')}}">


>>>>>>> 393e6da4bf562dd0f2a0df3cbb972c2ae42b13e6
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">

</head>
<body>
    @if(Auth::check())
    <div id="sidebar">
        <div id="sidebar-content">
            <ul class="list-unstyled text-center">
                <li>
                    <img id="perfil" src="{{ asset(Auth::user()->image)}}" alt="" class="img-responsive">
                </li>
                <li class="active">
                    <a href="{{url('/admin')}}">Usuarios</a>
                </li>
                <li>
                    <a href="{{url('/')}}">Inicio</a>
                </li>
                <li>
                    <a href="">Programas de formación</a>
                </li>
            </ul>
        </div>
    </div>
    @endif
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
                        
                        <li><a class="pop" href="{{ url('/contact')}}"> PROGRAMAS DE FORMACION </a></li>

                          
                        

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

        
        <div id="{{ Auth::check() ? 'main-content' : ''}}">
            @yield('content')   
             @yield('footer')         
        </div>
      

            
       



    </div>


    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/carousel.js') }}"></script>
    
    <script src="{{ asset('js/gallery.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>


    <script>
        
    </script>

</body>
</html>
