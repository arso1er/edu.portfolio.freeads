@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new category') }}</div>

                <div class="card-body">
                    <form action="/categories" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="parent_id">Parent</label>
                            <select class="form-select @error('parent_id') is-invalid @enderror" id="parent_id" name="parent_id" value="{{ old('parent_id') }}">
                                <option value="" {{ old('parent_id') == '' ? 'selected' : '' }}>None</option>
                                @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}" {{ old('parent_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('parent_id')
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