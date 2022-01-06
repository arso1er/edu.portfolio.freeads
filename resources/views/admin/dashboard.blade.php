@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <div class="col">
                            <a href="/admin/users" class="card h-100">
                                <div class="baz-card-anim">
                                    <img src="/images/users.jpg" class="card-img-top" alt="Users">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="fw-bold text-center">View all users</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/admin/ads" class="card h-100">
                                <div class="baz-card-anim">
                                    <img src="/images/manage-ads.png" class="card-img-top" alt="Ads">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="fw-bold text-center">View all ads</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/user/ads/create" class="card h-100">
                                <div class="baz-card-anim">
                                    <img src="/images/create-new-ad.png" class="card-img-top" alt="Create new ad">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="fw-bold text-center">Create new ad</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/admin/categories/new" class="card h-100">
                                <div class="baz-card-anim">
                                    <img src="/images/new-category.png" class="card-img-top" alt="Create new category">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="fw-bold text-center">Create new category</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="/profile" class="card h-100">
                                <div class="baz-card-anim">
                                    <img src="/images/my-profile.png" class="card-img-top" alt="My profile">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="fw-bold text-center">My profile</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="card h-100" data-bs-toggle="modal" data-bs-target="#user-{{ $user->id }}">
                                <div class="baz-card-anim">
                                    <img src="/images/remove-profile-admin.png" class="card-img-top" alt="Remove account">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="fw-bold text-center">Remove account</h5>
                                </div>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="user-{{ $user->id }}" tabindex="-1" aria-labelledby="user-{{ $user->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="user-{{ $user->id }}Label">Remove account</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete your account? This can't be undone.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <a href="/delete/users/{{ $user->id }}" class="btn btn-primary"
                                                onclick="event.preventDefault();
                                                document.getElementById('delete-user-{{ $user->id }}').submit();"
                                            >
                                                Confirm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="delete-user-{{ $user->id }}" action="/user/{{ $user->id }}" method="POST" class="d-none">
                                @csrf
                                @method('delete')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
