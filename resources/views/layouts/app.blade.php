<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BazingaAds, the #1 free ads platform in the world.">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BazingaAds | Ultimate free ads') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
                        Bazinga<span class="text-danger">Ads</span>
                    </a>
                    <div class="baz-nav d-sm-flex align-items-center d-none">
                        <div class="baz-nav-item p-4">
                            <a class="baz-nav-link active" aria-current="page" href="/">Home</a>
                        </div>
                        <div class="baz-nav-item p-4">
                            <a class="baz-nav-link" href="#">Features</a>
                        </div>
                        <div class="baz-nav-item p-4">
                            <a class="baz-nav-link" href="#">Pricing</a>
                        </div>
                        <div class="baz-nav-item p-4">
                            <a class="baz-nav-link">Not Disabled</a>
                        </div>
                    </div>
                    <div class="baz-nav d-sm-flex align-items-center d-none">
                        {{-- <div class="baz-nav-item p-4">
                            <a class="baz-nav-link active" aria-current="page" href="#">Home</a>
                        </div>
                        <div class="baz-nav-item p-4">
                            <a class="baz-nav-link" href="#">Features</a>
                        </div> --}}
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <div class="baz-nav-item p-4">
                                    <a href="{{ route('register') }}" class="baz-nav-link btn btn-outline-primary fw-bold">{{ __('Register') }}</a>
                                </div>
                            @endif

                            @if (Route::has('login'))
                                <div class="baz-nav-item py-4">
                                    <a href="{{ route('login') }}" class="baz-nav-link btn btn-primary fw-bold">{{ __('Login') }}</a>
                                </div>
                            @endif
                        @else
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->nickname }}
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                <li><a class="dropdown-item" href="#">View my ads</a></li>
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
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        </div>
                    </div>
                </div>
            </nav>

            @yield('content')

            <footer class="border-top container py-5 text-center">
                &copy; 2021 Bazinga, Inc. All rights reserved.
            </footer>
        </div>

    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
