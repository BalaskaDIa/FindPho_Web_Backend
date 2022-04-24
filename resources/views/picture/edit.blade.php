@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-md-8 col-xl-6">
                <form action="/pho-update/{{$picture->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="card-header">
                        <div class="col-8 offset-2">

                            <div class="row">
                                <h1 class="justify-content-center pb-3">Change your photo details here!</h1>
                            </div>

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="title" class="row justify-content-center">Photo Title</label>
                                    <input id="title"
                                           type="text"
                                           name="title"
                                           class="card-text form-control @error('title') is-invalid @enderror mb-3 mt-3"
                                           value="{{ old('title') ?? $picture->title ?? '' }}" required autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="row justify-content-center">Photo Description</label>
                                    <input id="description"
                                           type="text"
                                           name="description"
                                           class="card-text form-control @error('description') is-invalid @enderror mb-3 mt-3"
                                           value="{{ old('description') ?? $picture->description ?? ''}}" required autocomplete="description" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="categories_id" class="row justify-content-center">Photo Category</label>

                                    <select name="categories_id"
                                            class="form-select form-select-lg mt-3 mb-3"
                                            aria-label=".form-select-lg example"
                                            id="categories_id">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row pt-4">
                                    <button class="btn btn-light">Change Photo</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
