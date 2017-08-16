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
    <link rel="stylesheet" href="{{asset ('css/font-awesome.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/master.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css')}}">
</head>
<body>
    @if(Auth::check())
    <div id="sidebar">
        <div id="sidebar-content">
            <ul class="list-unstyled">
                <li>
                    <img id="perfil" src="{{ asset('imgs/sl3.png')}}" alt="">
                </li>
                <li>
                    <a href="">Opción1</a>
                </li>
                <li>
                    <a href="">Opción1</a>
                </li>
                <li>
                    <a href="">Opción1</a>
                </li>
                <li>
                    <a href="">Opción1</a>
                </li>
            </ul>
        </div>
    </div>
    @endif
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
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
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                            
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
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"

    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/gallery.js') }}"></script>
    <script>
        $('.container-gallery').gallery({
          height: 750,
          items: 10,
          480: {
            items: 2,
            height: 400,
            thmbHeight: 100
          },
          768: {
            
            items: 3,
            height: 500,
            thmbHeight: 120
          },
          600: {
            
            items: 4
          },
          992 : {
            
            items: 5,
            height: 350
          }

        });

    </script>

</body>
</html>
