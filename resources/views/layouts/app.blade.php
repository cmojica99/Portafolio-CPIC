<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PORTAFOLIO') }}</title>

    <style>
        a.d:hover{
            text-decoration: none;
        }
        li.d:hover{
            background-color: #fff;
        }
        li.d{
            padding: 5px;

        }
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/master.css')}}">

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
                <li  class="d">
                    <a class="d" href="{{url('/admin')}}">Usuarios</a>
                </li>
                <li  class="d">
                    <a class="d" href="{{url('/')}}">Inicio</a>
                </li>
                <li  class="d">
                    <a class="d" href="">Programas de formación</a>
                </li>
            </ul>
        </div>
    </div>
    @endif

    
                                <ul class="dropdown-menu" role="menu">
                                    
                                </ul>

        
        <div id="{{ Auth::check() ? 'main-content' : ''}}">
            @yield('content')   
             @yield('footer')         
        </div>
      

            
       



    </div>


    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/carousel.js') }}"></script>
    
<!--     <script src="{{ asset('js/gallery.js') }}"></script> -->
    <script src="{{ asset('js/site.js') }}"></script>



        
    </script>


        </script>
</body>
</html>
