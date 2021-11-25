@extends('layouts.app')

@section('content')

    <main class="container-fluid p-0 position-relative home">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-sm-6 baz-home-header order-md-2"></div>
                <div class="col-12 col-sm-6 mt-4 mt-md-0 d-flex flex-column">
                    <div class="text-danger text-uppercase fw-bold">Welcome to Bazinga Ads.</div>
                    <div class="fs-2 lh-sm mb-3 mt-3">We are the number one growing free ads platform.</div>
                    <div class="fs-4 mb-3">We offer unlimited free ads to anyone and everyone. You won't find better anywhere else. Over ten thousands people put their trust in Bazinga Ads since its creation, and we'll be happy to have you among us. All you have to do is create an account and join the fun!</div>
                    <form action="/ads" class="col-md-8 mt-auto">
                        <div class="input-group">
                            <input name="title" type="text" class="form-control bg-light" placeholder="Search ads" aria-label="Search ads" aria-describedby="home-search">
                            <button class="btn btn-outline-secondary" type="submit" id="home-search">Go</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="baz-about text-white">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 order-2 order-md-0 about-person">
                  <div class="mr-5">
                    <img src="/images/home/about-left-image.png" alt="person graphic">
                  </div>
                </div>
                <div class="col-lg-8 align-self-center about-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item mb-4">
                                <h4>Free Ads</h4>
                                <p class="m-0">Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item mb-4">
                                <h4>Max visibility</h4>
                                <p class="m-0">Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item mb-4">
                                <h4>No hidden fees</h4>
                                <p class="m-0">Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <h4>High reach</h4>
                                <p class="m-0">Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>

        @if (count($ads) > 0)
            <div class="container mt-120 mb-120">
                <div class="align-items-center d-flex justify-content-between mb-4">
                    <div class="fs-4 fw-bold">Latest ads</div>
                    <a href="/ads" class="btn btn-primary btn-sm">View more</a>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach ($ads as $ad)
                        <div class="col">
                            <a href="/ads/{{ $ad->id }}" class="card h-100 baz-card-anim-container">
                                <div class="baz-card-anim">
                                    <img src="{{ $ad->picture }}" class="card-img-top" alt="{{ $ad->title }}">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-truncate">{{ $ad->title }}</h5>
                                    <div class="small text-muted fw-bold">${{ $ad->price }}</div>
                                    <p class="card-text baz-ellipsis">{{ $ad->description }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </main>

@endsection