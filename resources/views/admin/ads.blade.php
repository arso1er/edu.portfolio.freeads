@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="fs-4 fw-bold">Ads list</div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($ads as $ad)
                <div class="col">
                    <div class="card h-100 baz-card-anim-container">
                        <div class="baz-card-anim">
                            <img src="{{ explode('|', $ad->picture)[0] }}" class="card-img-top" alt="{{ $ad->title }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-truncate">{{ $ad->title }}</h5>
                            <p class="card-text baz-ellipsis">{{ $ad->price }}</p>
                            <div class="d-flex justify-content-between mt-auto">
                                <a href="/user/ads/{{ $ad->id }}/edit" class="btn btn-sm btn-success fw-bold">Edit</a>
                                <a href="/delete/ads/{{ $ad->id }}" class="btn btn-sm btn-danger fw-bold text-white"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-ad-{{ $ad->id }}').submit();"
                                >
                                    Delete
                                </a>
                                <form id="delete-ad-{{ $ad->id }}" action="/ads/{{ $ad->id }}" method="POST" class="d-none">
                                    @csrf
                                    @method('delete')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection