@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Search for wonderful photos in our website!</div>

                    <div class="card-body">
                        <search></search>
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

                </div>
            </div>
        </div>
    </div>
@endsection
