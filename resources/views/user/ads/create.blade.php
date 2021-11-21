@extends('layouts.app')

@section('content')

<form enctype="multipart/form-data" class="container my-5" action="/ads" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input name="price" type="number" min="0" class="form-control" id="price">
    </div>
    <div class="form-group">
        <label for="location">Location</label>
        <input name="location" type="text" class="form-control" id="location">
    </div>
    <div class="custom-file mb-3 has-validation">
        <input type="file" class="custom-file-input" id="picture" name="picture">
        <label class="custom-file-label" for="picture">Choose a picture...</label>
        {{-- <div class="invalid-feedback">Example invalid custom file feedback</div> --}}
        {{-- <label for="picture">Picture</label>
        <input name="picture" type="text" class="form-control" id="picture"> --}}
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="custom-select" id="category_id" name="category_id">
            <option selected disabled value="">Choose...</option>
            <option value="">First</option>
        </select>
        {{-- <div class="invalid-tooltip">
            Please select a valid state.
        </div> --}}
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

@endsection