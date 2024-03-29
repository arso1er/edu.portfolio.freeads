<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FreeAds, the #1 free ads platform in the world.">
    <link rel="icon" type="image/png" href="/favicon.png"/>

    @yield('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FreeAds | Ultimate free ads') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bazinga-home.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/assets/css/bazinga-home.css"> --}}
</head>
<body>
    <div id="app">
        @include('layouts.flash-message')

        <div class="baz-content-wrapper">
            <nav class="navbar navbar-light bg-light sticky-top">
                <div class="container">
                    <a class="fw-bold navbar-brand text-primary text-uppercase" href="/">
                        Free<span class="text-danger">Ads</span>
                    </a>
                    <div class="baz-nav d-sm-flex align-items-center d-none">
                        <div class="baz-nav-item px-4 py-1">
                            <a class="baz-nav-link" aria-current="page" href="/">Home</a>
                        </div>
                        <div class="baz-nav-item px-4 py-1">
                            <a class="baz-nav-link" href="/ads">Browse ads</a>
                        </div>
                        <div class="baz-nav-item px-4 py-1">
                            <a class="baz-nav-link" href="/history">My History</a>
                        </div>
                    </div>
                    <div class="baz-nav d-sm-flex align-items-center d-none">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <div class="baz-nav-item px-4 py-1">
                                    <a href="{{ route('register') }}" class="baz-nav-link btn btn-outline-primary fw-bold">{{ __('Register') }}</a>
                                </div>
                            @endif

                            @if (Route::has('login'))
                                <div class="baz-nav-item py-1">
                                    <a href="{{ route('login') }}" class="baz-nav-link btn btn-primary fw-bold">{{ __('Login') }}</a>
                                </div>
                            @endif
                        @else
                            <div class="btn-group">
                                <button type="button" class="d-flex align-items-center btn btn-primary dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="baz-profile-img" src="{{ Auth::user()->picture }}" alt="{{ Auth::user()->nickname }}">
                                    {{ Auth::user()->nickname }}
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                <li><a class="dropdown-item" href="/profile">My profile</a></li>
                                <li><a class="dropdown-item" href="/user/my-ads">View my ads</a></li>
                                <li><a class="dropdown-item" href="/user/ads/create">Create new ad</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                </ul>
                            </div>
                        @endguest
                    </div>
                    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title text-primary fw-bold text-uppercase" id="offcanvasNavbarLabel">
                                Free<span class="text-danger">Ads</span>
                            </h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/ads">Browse ads</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/history">My History</a>
                                </li>
                                @guest
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ Auth::user()->nickname }}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                            <li><a class="dropdown-item" href="/profile">My profile</a></li>
                                            <li><a class="dropdown-item" href="/user/my-ads">View my ads</a></li>
                                            <li><a class="dropdown-item" href="/user/ads/create">Create new ad</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            @yield('content')

            <footer class="border-top container py-5 text-center">
                &copy; {{ date("Y") }} FreeAds, Inc. All rights reserved.
            </footer>
        </div>

    </div>
</body>
</html>
