@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $picture->image }}" class="w-100" alt="">
            </div>
            <div class="col-4">
                <h2>{{ $picture->user->username }}</h2>

                <p>{{ $picture->caption }}</p>

            </div>
        </div>
    </div>
@endsection

