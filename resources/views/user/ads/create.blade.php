@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new ad') }}</div>

                <div class="card-body">
                    <form enctype="multipart/form-data" action="/ads" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label" for="title">Title</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" required>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="description">Description</label>
                            <textarea required class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="price">Price</label>
                            <input required name="price" type="number" min="0" class="form-control @error('price') is-invalid @enderror" id="price">
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="location">Location</label>
                            <input required name="location" type="text" class="form-control @error('location') is-invalid @enderror" id="location">
                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="picture" class="form-label">Picture</label>
                            <input required class="form-control @error('picture') is-invalid @enderror" type="file" id="picture" name="picture">
                            @error('picture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="category_id">Category</label>
                            <select class="form-select" id="category_id" name="category_id">
                                <option selected disabled value="">Choose...</option>
                                <option value="">First</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    {{-- @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection