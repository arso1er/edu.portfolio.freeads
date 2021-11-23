@extends('layouts.app')

@section('content')
    <div class="container my-5">
        @if (count($ads) < 1)
            <div class="fs-4">No matching ads found in our records.</div>
        @else
            <div class="fs-4 fw-bold mb-4">Showing {{ count($ads) }} out of {{ $total }} ads.</div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <form action="/ads" id="ads-search-form">
                        <div class="input-group input-group-lg">
                            <input name="title" value="{{ $title }}" type="text" class="form-control bg-light" placeholder="Search ads" aria-label="Search ads" aria-describedby="ads-search">
                            <button class="btn btn-secondary" type="submit" id="ads-search">Go</button>
                        </div>
                    
                        <div class="ge-select">
                            <select name="category">
                                <option value="">All Categories</option>
                                <option value="0">First</option>
                                <option value="1">Second</option>
                                <option value="2">Third</option>
                            </select>
                            <img src="/images/arrow-down.svg" alt="Down Arrow">
                        </div>

                        <div class="ge-select">
                            <select name="sort">
                                <option value='title asc' {{ $sort === 'title asc' ? 'selected' : ''}}>Sort by: Title A-Z</option>
                                <option value='title desc' {{ $sort === 'title desc' ? 'selected' : ''}}>Sort by: Title Z-A</option>
                                <option value='price asc' {{ $sort === 'price asc' ? 'selected' : ''}}>Sort by: Price Low to High</option>
                                <option value='price desc' {{ $sort === 'price desc' ? 'selected' : ''}}>Sort by: Price High to Low</option>
                            </select>
                            <img src="/images/arrow-down.svg" alt="Down Arrow">
                        </div>

                        <div class="ge-select">
                            <select name="per_page">
                                <option value='7' {{ $perPage === '7' ? 'selected' : '' }}>Show 7 ads per page</option>
                                <option value='15' {{ $perPage === '15' ? 'selected' : '' }}>Show 15 ads per page</option>
                                <option value='23' {{ $perPage === '23' ? 'selected' : '' }}>Show 23 ads per page</option>
                                <option value='31' {{ $perPage === '31' ? 'selected' : '' }}>Show 31 ads per page</option>
                            </select>
                            <img src="/images/arrow-down.svg" alt="Down Arrow">
                        </div>

                        <div class="price-range">
                            <span>Price Range</span>
                            <div class="slider" id="slider-distance">
                                <div>
                                    <div class="inverse-left"></div>
                                    <div class="inverse-right"></div>
                                    <div class="range"></div>
                                    <span class="thumb first"></span>
                                    <span class="thumb second"></span>
                                    <div class="sign first">
                                        <span>0</span>
                                    </div>
                                    <div class="sign second">
                                        <span>10000</span>
                                    </div>
                                </div>
                                <input name="min_price" type="range" value="{{ $min_price }}" max="10000" min="0" step="1" />
                            
                                <input name="max_price" type="range" value="{{ $max_price }}" max="10000" min="0" step="1" />
                            </div>
                            <div class="prices">
                                <span>$
                                    <span id="price-left">0</span>
                                </span>
                                <span>$
                                    <span id="price-right">10000</span>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
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

            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                   {!! $pageLinks !!}
                </ul>
            </nav>
        @endif
    </div>
@endsection