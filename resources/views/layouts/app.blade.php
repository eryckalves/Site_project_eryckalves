<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eryck Vaz Alves</title>
    <link rel="shortcut icon" href="{{ asset('/storage/images/favicon.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/lightbox.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="https://kit.fontawesome.com/ebd88ca084.js"></script>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoxCBzGTzazye6AgkNxBTDhwaeYf0SRKM"></script>


</head>

<body>
    <div id="app">
        <!-- fixed-top para bootstrap 4 -->
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="d-flex">
                        <img class="pr-3" style="height:35px" src="{{ asset('storage/images/favicon.png')}}" alt="">
                        <div>Home</div>
                    </div>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ">
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('sobre.index') }}"><div class="{{Request::is('sobre') ? 'marcador_text' : null}} ">Sobre nós</div></a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('produto.index') }}"><div class="{{Request::is('produto') ? 'marcador_text' : null}}">Produtos & Serviços</div></a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('galeria.index') }}"><div class="{{Request::is('galeria') ? 'marcador_text' : null}}">Galeria</div></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contato.create') }}"><div class="{{Request::is('contato') ? 'marcador_text' : null}}">Contato</div></a>
                        </li>  

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
            @include('layouts/footer')
        </main>
    </div>
</body>
</html>
