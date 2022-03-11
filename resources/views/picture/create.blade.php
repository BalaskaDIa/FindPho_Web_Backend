@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/pho" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Picture</h1>
                </div>

                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label">Picture Caption</label>


                    <input id="caption"
                    type="text"
                    name="caption"
                    class="form-control @error('caption') is-invalid @enderror"
                    value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="categories_id" class="col-md-4 col-form-label">Picture Category</label>


                    <input id="category_id"
                           type="text"
                           name="categories_id"
                           class="form-control @error('categories_id') is-invalid @enderror"
                           value="{{ old('categories_id') }}" required autocomplete="categories_id" autofocus>

                    @error('categories_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Picture</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
