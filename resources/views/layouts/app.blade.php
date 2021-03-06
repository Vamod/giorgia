<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/tree.png') }}" sizes="16x16" type="image/png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Giorgia Cesarini - @if(url()->current() == route('guests.home'))
        {{ 'home' }}
        @elseif(url()->current() == route('guests.chisono'))
        {{ 'chisono' }}
        @elseif(url()->current() == route('guests.dicosamioccupo'))
        {{ 'dicosamioccupo' }}
        @elseif(url()->current() == route('guests.imieiarticoli'))
        {{ 'imieiarticoli' }}
        @else
        {{ 'contatti' }}
        @endif
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="nav-title">Dott.ssa <span class="title-name">Giorgia Cesarini</span></div>
                    <div class="nav-descr">Psicologa - Psicoterapeuta</div>
                </a>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> --}}
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                {{-- </button> --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav main-link ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link main-menu {{ (url()->current() == route('guests.chisono')) ? 'selected': '' }}" href="{{ route('guests.chisono') }}">Chi sono</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-menu {{ (url()->current() == route('guests.dicosamioccupo')) ? 'selected': '' }}" href="{{ route('guests.dicosamioccupo') }}">Di cosa mi occupo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-menu {{ (url()->current() == route('guests.imieiarticoli')) ? 'selected': '' }}" href="{{ route('guests.imieiarticoli') }}">I miei articoli</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link main-menu {{ (url()->current() == route('guests.contatti')) ? 'selected': '' }}" href="{{ route('guests.contatti') }}">Contatti</a>
                                </li>
                            @endif
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('posts.index') }}">Gestisci articoli</a>
                                    <a class="dropdown-item" href="{{ route('posts.create') }}">Crea un nuovo articolo</a>
                                    <a class="dropdown-item" href="{{ route('guests.chisono') }}">Chi sono</a>
                                    <a class="dropdown-item" href="{{ route('guests.dicosamioccupo') }}">Di cosa mi occupo</a>
                                    <a class="dropdown-item" href="{{ route('guests.imieiarticoli') }}">I miei articoli</a>
                                    <a class="dropdown-item" href="{{ route('guests.contatti') }}">Contatti</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    
                </div>
                <div class="hamburger">   
                    <div class="hamburger__line">
                         <div class="hamburger__line-top"></div>
                         <div class="hamburger__line-bottom"></div>   
                    </div>               
                </div>
            </div>
        </nav>
        <main>
             {{-- mobile navbar --}}
            <div class="mobile-menu">
                <div class="container">
                    @guest
                    <a href="{{ route('guests.chisono') }}">Chi sono</a>
                    <a href="{{ route('guests.dicosamioccupo') }}">Di cosa mi occupo</a>
                    <a href="{{ route('guests.imieiarticoli') }}">I miei articoli</a>
                    <a href="{{ route('guests.contatti') }}">Contatti</a>
                    @else
                    <a href="{{ route('posts.index') }}">Gestisci articoli</a>
                    <a href="{{ route('posts.create') }}">Crea un nuovo articolo</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
            @yield('content')
        </main>
        @include('partials/footer')
    </div>
</body>
</html>
