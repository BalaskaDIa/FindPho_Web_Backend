@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header row">
                <h2 class="row justify-content-center">Pick one category</h2>

            </div>


            <div class="result"></div>

            <div class="card-body row pt-5">
                <form>
                    @csrf
                    <select id="categories_id" name="categories_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value="#">Choose one...</option>
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
            @foreach($picture as $pic)
                @if(!isset($_GET["categories_id"])||$pic->categories_id == $_GET["categories_id"])
                

                <div class="col-4 pb-4 pt-5 pic">
                    <a href="/pho/{{ $pic->id }}">
                        <img src="/storage/{{ $pic->image }}" class="w-100 image">
                    </a>
                    <div class="middle">
                        <a href="/pho/{{ $pic->id }}"><div class="text">{{$pic->title}}</div></a>
                    </div>
                </div>
                @endif
            @endforeach
            

        </div>
    </div>
    </div>
    </div>


@endsection
