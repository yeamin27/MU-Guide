<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Metro Guide </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700">

    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav id="top-navbar" class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: #001C57">
            <div class="navbar-brand pl-md-4">Metro Guide</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto nav-flex-icons">
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
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="w-25 rounded-circle z-depth-0" alt="avatar image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-info" aria-labelledby="navbarDropdownMenu">
                            <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <!-- /Navbar -->

        <main id="main" class="position-relative bg-full-color">
            @yield('content')
        </main>
    </div>

    <!-- JQuery -->
    <script type="text/javascript" src={{ asset('js/jquery.min.js') }}></script>

    <!-- Script -->
    <script type="text/javascript" src={{ asset('js/main.js') }}></script>

    <!-- Bootstrap -->
    {{-- <script type="text/javascript" src={{ asset('js/popper.js') }}></script> --}}
    {{-- <script type="text/javascript" src={{ asset('js/bootstrap.min.js') }}></script> --}}
    {{-- <script type="text/javascript" src={{ asset('js/mdb.min.js') }}></script> --}}
</body>
</html>
