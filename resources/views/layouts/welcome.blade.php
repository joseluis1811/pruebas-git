<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- links --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/icomoon.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/responsive.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('web/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('web/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('web/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('web/images/ico/apple-touch-icon-57-precomposed.png')}}">
  
     {{-- fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('web/css/estilos.css')}}" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/home') }}"><img src="{{asset('web/images/logo-red4.JPEG')}}"
                            width="80px" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="/">Inicio</a></li>
                        <li><a href="{{route('donacion')}}">Donar</a></li>
                        <li><a href="{{route('servicios')}}">Servicios</a></li>
                        <li><a href="{{route('about')}}">Sobre Nosotros</a></li>
                        @if (Route::has('login'))

                        @auth


                        <li><a href="{{ url('/home') }}">Mi Perfil</a></li>

                        @else
                        <li><a href="{{ route('login') }}">Ingresar</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Registrarse</a></li>

                        @endif
                        @endauth

                        @endif
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
    </header>

    <main style="padding-top: 10px">
        @yield('content')
    </main>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2020 Todos los Derechos Reservados
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="/">Volver al Inicio</a></li>
                        <li><a href="{{route('donacion')}}">Donar</a></li>
                        <li><a href="{{route('servicios')}}">Servicios</a></li>
                        <li><a href="{{route('about')}}">Sobre Nosotros</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('web/js/jquery.js')}}"></script>
    <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('web/js/main.js')}}"></script>
    <script src="{{asset('web/js/all.js')}}"></script>
</body>

{{-- </html> --}}