<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light  navbar-laravel">
            <div class="container-fluid">
                <nav class="navbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <h1>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </h1>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/primeiro') }}">Primeiro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Segundo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terceiro</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="navbar" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>
                    <a visible="false" data-toggle="collapse" data-target="#toggle_invisible" aria-controls="toggle_invisible" aria-expanded="false"
                        aria-label="Toggle navigation">
                    </a>
                    <div class="collapse navbar-collapse" id="toggle_invisible">
                        <a id="search_button" class="nav-link" href="#" onclick="show('search_div')" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" role="img" aria-labelledby="fwt-search-button-icon-title">
                                <title id="fwt-search-button-icon-title">Busca</title>
                                <g stroke="#858585" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linejoin="round">
                                    <path class="header-search" d="M14.9950142,22.6292642 C13.9190142,22.1452642 12.9100142,21.4612642 12.0260142,20.5772642 C8.12001418,16.6712642 8.12001418,10.3392642 12.0260142,6.43426418 C15.9320142,2.52826418 22.2640142,2.52826418 26.1690142,6.43426418 C30.0750142,10.3392642 30.0750142,16.6712642 26.1690142,20.5772642 C24.2450142,22.5012642 21.6200142,23.4612642 19.0980142,23.4892642 L19.0980142,34.6902642"
                                        id="Stroke-1" transform="translate(19.097514, 19.097514) rotate(-45.000000) translate(-19.097514, -19.097514)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Authentication Links -->
                        @guest
                        <a id="navbarDropdown_" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            v-pre>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 25 25" id="fwt-profile-button-loggedout" role="img"
                                aria-labelledby="fwt-profile-button-loggedout-title">
                                <title id="fwt-profile-button-loggedout-title">Login</title>
                                <g fill="none" fill-rule="evenodd" stroke="#858585" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M27.5 32.077V26.07c0-3.888-3.136-7.069-6.967-7.069h-4.566C12.135 19 9 22.181 9 26.07v4.006c0 .553.454 1.001.998 1.001H20.94M12 9.857C12 6.622 14.584 4 17.772 4c3.187 0 5.772 2.622 5.772 5.857 0 3.235-2.585 5.857-5.772 5.857-3.188 0-5.772-2.622-5.772-5.857z"></path>
                                </g>
                            </svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </ul>
                        </div>

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        <div id="search_div" style="display:none" class="navbar navbar-expand-lg navbar-dark bg-dark  navbar-laravel">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Busque por...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Ir</button>
                            <button type="button" class="btn btn-default" onclick="hide('search_div')">X</button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
            </div>
            <!-- /.row -->
        </div>

        <main class="py-3">
            @yield('content')
        </main>

        <div class="jumbotron page-footer" style="background:#4682B4">
            <div class="container-fluid">
                <h1>Rodapé do layout Padrao</h1>
                <p>pequeno texto para verificação</p>
            </div>
        </div>
    </div>
</body>
<script>
    function show(target) {
        document.getElementById(target).style.display = 'block';
    }
    function hide(target) {
        document.getElementById(target).style.display = 'none';
    }
</script>

</html>