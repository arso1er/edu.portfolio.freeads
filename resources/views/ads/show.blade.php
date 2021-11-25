@extends('layouts.app')

@section('meta')
    <title> {{ $ad->title }} | BazingaAds </title>
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $ad->title }}" />
    <meta name="twitter:description" content="{{ $ad->description }}" />
    <meta
        name="twitter:image"
        content="{{ $rootUrl . $ad->picture }}"
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
        content="{{ $rootUrl . $ad->picture }}"
    />
    <meta
        property="og:image:secure_url"
        content="{{ $rootUrl . $ad->picture }}"
    />
    <meta
        property="og:url"
        content="{{ $bareUrl }}"
    />
@endsection

@section('content')
    <div class="container my-0 my-md-5">
        <div class="product-container">
            <div class="product-image">
                    <img src="{{ $ad->picture }}" alt="{{ $ad->title }}">
            </div>

            <div class="product-description">
                {{-- <div class="product-category">
                    <a href="" class="link-unstyled">
                        cat name
                    </a>
                    <div class="go-back">
                        <svg>
                            <use xlink:href="/svg/sprite.svg#icon-arrow-left"></use>
                        </svg>
                        Go Back
                    </div>
                </div> --}}
                <div class="product-title"> {{ $ad->title }} </div>
                <div class="product-price">${{ $ad->price }} </div>
                <div class="product-desc">
                    {{ $ad->description }}
                </div>
                <div class="product-share">
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
@endsection