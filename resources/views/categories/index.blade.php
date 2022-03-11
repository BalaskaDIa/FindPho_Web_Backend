@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row pt-5">
                @foreach($categories as $category)
                    <div class="col-4 pb-4">
                        <a href="/pho/{{ $picture->id }}">
                            <img src="/storage/{{ $picture->image }}" class="w-100">
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
