@extends('layouts.app')

@section('meta')
    <title> {{ $ad->title }} | BazingaAds </title>
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $ad->title }}" />
    <meta name="twitter:description" content="{{ $ad->description }}" />
    <meta
        name="twitter:image"
        content="{{ $rootUrl . explode('|', $ad->picture)[0] }}"
    />
    
    <!-- Open graph -->
    <!-- <meta property="fb:app_id" content="" /> -->
    <meta property="og:type" content="website" />
    <meta
        property="og:site_name"
        content="Bazinga"
    />
    <meta property="og:title" content="{{ $ad->title }}" />
    <meta name="description" content="{{ $ad->description }}" />
    <meta property="og:description" content="{{ $ad->description }}" />
    <meta
        property="og:image"
        content="{{ $rootUrl . explode('|', $ad->picture)[0] }}"
    />
    <meta
        property="og:image:secure_url"
        content="{{ $rootUrl . explode('|', $ad->picture)[0] }}"
    />
    <meta
        property="og:url"
        content="{{ $bareUrl }}"
    />
@endsection

@section('content')
    <div class="d-none" id="product-info"
        data-id="{{ $ad->id }}"
        data-name="{{ $ad->title }}"
        data-price="{{ $ad->price }}"
        data-picture="{{ explode('|', $ad->picture)[0] }}"
    ></div>

    <div class="container my-5 align-items-center d-flex flex-column">
        <div class="baz-card col align-items-center d-flex flex-column">
            <div class="d-flex align-self-stretch mb-2 justify-content-between fw-bold">
                <a href="/ads?title=&category={{ $ad->category_id }}&sort=title+asc&per_page=7&min_price=0&max_price=10000" class="text-secondary">
                    {{ $ad->catName }}
                </a>
                <div class="go-back">
                    <svg>
                        <use xlink:href="/svg/sprite.svg#icon-arrow-left"></use>
                    </svg>
                    Go Back
                </div>
            </div>
            <div class="card h-100">
                <div class="card-img-top w-100">
                    <div id="showAdCarousel" class="{{ count(explode('|', $ad->picture)) > 1 ? 'carousel slide' : '' }}" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach (explode('|', $ad->picture) as $picture)
                                {{-- https://www.codegrepper.com/code-examples/php/laravel+blade+%40foreach+check+if+first+iteration --}}
                                @if ($loop->first)
                                    <div class="carousel-item active">
                                        <img src="{{ $picture }}" class="d-block w-100" alt="{{ $ad->title }}">
                                    </div>
                                @endif

                                <div class="carousel-item">
                                    <img src="{{ $picture }}" class="d-block w-100" alt="{{ $ad->title }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <h5 class="card-title fw-bold"> {{ $ad->title }} </h5>
                    <div class="text-muted fw-bold"> ${{ $ad->price }} </div>
                    <div class="card-text mb-3"> <span class="fw-bold">Location:</span> {{ $ad->location }} </div>
                    <div class="fw-bold">Description</div>
                    <p class="card-text"> {{ $ad->description }} </p>
                </div>
                <div class="card-footer">
                    <div class="product-share py-2">
                        <a href="{{ $shareUrls[1] }}" target="_blank" rel="noopener noreferrer" class="psp-group link-unstyled">
                            <div class="psp-icon facebook">
                                <svg>
                                    <use xlink:href="/svg/sprite.svg#icon-facebook"></use>
                                </svg>
                            </div>
                            <span class="pspi-text">Facebook</span>
                        </a>
                        <a href="{{ $shareUrls[2] }}" target="_blank" rel="noopener noreferrer" class="psp-group link-unstyled">
                            <div class="psp-icon twitter">
                                <svg>
                                    <use xlink:href="/svg/sprite.svg#icon-twitter"></use>
                                </svg>
                            </div>
                            <span class="pspi-text">Twitter</span>
                        </a>
                        <a href="{{ $shareUrls[3] }}" target="_blank" rel="noopener noreferrer" class="psp-group link-unstyled">
                            <div class="psp-icon email">
                                <svg>
                                    <use xlink:href="/svg/sprite.svg#icon-envelope"></use>
                                </svg>
                            </div>
                            <span class="pspi-text">Email</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection