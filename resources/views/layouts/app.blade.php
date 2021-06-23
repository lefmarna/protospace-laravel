<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700,900&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="header">
            <div class="inner">
                <div class="nav">
                    <!-- Left Side Of Navbar -->
                    <div class="nav__left">
                        <a href="{{ route('root') }}">
                            <img src="{{ asset('images/logo.png')}}" class="logo" />
                        </a>
                    </div>

                    <!-- Right Side Of Navbar -->
                    @guest
                        <div class="nav__right">
                            <a class="nav__btn" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            @if (Route::has('register'))
                                <a class="nav__btn" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                            @endif
                        </div>
                    @else
                        <div class="nav__right">
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="nav__logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('ログアウト') }}
                                </a>
                                <a class="nav__btn" href="{{ route('prototypes.create') }}">
                                    {{ __('New Proto') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </nav>
            </div>
        </header>
        @yield('content')
        <footer class="footer">
            <p class="copyright">Copyright © PROTO SPACE All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
