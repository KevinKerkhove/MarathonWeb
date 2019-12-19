<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Glow</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
</head>
<body>
<header id="header">
    <div id="container_header">
        <a class="logo" href="{{ url('/') }}">
            <div id="logo_container"></div>
        </a>
        <div class="liens">
            <div class="container_liens">
            <a class="lien_menu accueil" href="{{ url('/') }}">Accueil</a>
            </div>

            <div class="container_liens">
            <a class="lien_menu serie" href="{{ url('/') }}">Séries</a>
            </div>


            <div class="container_liens">
            <a class="lien_menu connect" href="{{ route('register') }}">Se connecter</a>
            </div>

            <form action="post" class="container_liens">
                <input type="text" name="barre_de_recherche" id="barre_de_recherche" placeholder="Rechercher">
                <input type="submit" value="ok" id="ok">
            </form>


        </div>
    </div>
</header>


<!-- Authentication Links -->
<nav>
    <ul>
        @guest
        @else
            <li> Bonjour {{ Auth::user()->name }}</li>
            @if (Auth::user())
                <li><a href="{{ route('creer_histoire') }}">Ajouter une histoire</a></li>
                <li><a href="{{ route('creer_chapitre') }}">Ajouter un chapitre</a></li>
                <li><a href="{{ route('lier_chapitre') }}">Lier un chapitre</a></li>

            @endif
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest
    </ul>
</nav>

<div id="main">
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
