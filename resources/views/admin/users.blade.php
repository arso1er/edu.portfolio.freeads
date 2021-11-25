@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="fs-4 fw-bold">Users list</div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($users as $user)
                <div class="col">
                    <div class="card h-100 baz-card-anim-container">
                        <div class="baz-card-anim">
                            <img src="{{ $user->picture }}" class="card-img-top" alt="{{ $user->nickname }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-truncate">{{ $user->nickname }}</h5>
                            <p class="card-text baz-ellipsis">{{ $user->email }}</p>
                            <div class="d-flex justify-content-between mt-auto">
                                <a href="/user/{{ $user->id }}/edit" class="btn btn-sm btn-success fw-bold">Edit</a>
                                <a href="/delete/users/{{ $user->id }}" class="btn btn-sm btn-danger fw-bold text-white"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-user-{{ $user->id }}').submit();"
                                >
                                    Delete
                                </a>
                                <form id="delete-user-{{ $user->id }}" action="/user/{{ $user->id }}" method="POST" class="d-none">
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