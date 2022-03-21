@extends('layouts.app')

@section('content')

    <body class="antialiased">
    <div class="container">
        <form class="input-group my-5" type="get" action="{{ url('/search') }}">
            <input name="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-outline-primary">search</button>
        </form>
        <div class="row pt-5">
            @foreach($picture as $pic)
                <div class="col-4 pb-4">
                    <a href="/pho/{{ $pic->id }}">
                        <img src="/storage/{{ $pic->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    </body>

@endsection
