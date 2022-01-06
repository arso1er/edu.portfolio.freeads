@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    {{ __('My Profile') }}
                    <a class="btn btn-primary" href="/user/{{ $user->id }}/edit">Edit profile</a>
                </div>

                <div class="card-body d-md-flex">
                    <div class="profile-picture mb-4 mb-md-0 me-md-4" style="background-image: url({{ $user->picture }})"></div>
                    <div class="profile-info">
                        <div class="mb-3">
                            <span class="fw-bold me-2">Login:</span> {{ $user->login }}
                        </div>
                        <div class="mb-3">
                            <span class="fw-bold me-2">Email:</span> {{ $user->email }}
                        </div>
                        <div class="mb-3">
                            <span class="fw-bold me-2">Nickname:</span> {{ $user->nickname }}
                        </div>
                        <div>
                            <span class="fw-bold me-2">Phone number:</span> {{ $user->phone }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
