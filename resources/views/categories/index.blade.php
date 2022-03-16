@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="row pt-5">
                <label for="categories_id" class="col-md-4 col-form-label">Picture Category</label>

                <form>
                    @csrf
                    <select id="categories_id" name="categories_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    @foreach($categories as $category)
                        @if(isset( $_GET["categories_id"])&&$category->id == $_GET["categories_id"])
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                    </select>
                    <input id="submit" type="submit" value="" style="display:none;">
                </form>
            </div>
            

            <div class="result"></div>

            <div class="row pt-5">
            @foreach($picture as $pic)
                @if(!isset($_GET["categories_id"])||$pic->categories_id == $_GET["categories_id"])
                <div class="col-4 pb-4">
                    <a href="/pho/{{ $pic->id }}">
                        <img src="/storage/{{ $pic->image }}" class="w-100">
                    </a>
                </div>
                @endif
            @endforeach
        </div>
        </div>
    </div>


@endsection
