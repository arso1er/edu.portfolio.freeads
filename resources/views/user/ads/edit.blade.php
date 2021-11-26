@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit ad') }}</div>

                <div class="card-body">
                    <form enctype="multipart/form-data" action="/ads/{{ $ad->id }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="mb-4">
                            <label class="form-label" for="title">Title</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $ad->title }}" required>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="description">Description</label>
                            <textarea required class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ $ad->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="price">Price</label>
                            <input required name="price" type="number" min="0" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ $ad->price }}">
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="location">Location</label>
                            <input required name="location" type="text" class="form-control @error('location') is-invalid @enderror" id="location" value="{{ $ad->location }}">
                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="picture" class="form-label">Picture</label>
                            <input class="form-control @error('picture') is-invalid @enderror" type="file" multiple accept="image/*" id="picture" name="picture[]">
                            @error('picture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="category_id">Category</label>
                            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id" value="{{ $ad->category_id }}">
                                @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}" {{ $ad->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection