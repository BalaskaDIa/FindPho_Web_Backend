@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header row justify-content-center">Search for wonderful photos in our website!</h2>

                    <div class="card-body row">
                        <search class="row justify-content-center"></search>
                        <div class="row pt-5">
                            @foreach($picture as $pic)
                                <div class="col-4 pb-4">
                                    <a href="/pho/{{ $pic->id }}">
                                        <img src="/storage/{{ $pic->image }}" alt="Missing photo, please try to reload the browser." class="w-100">
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
