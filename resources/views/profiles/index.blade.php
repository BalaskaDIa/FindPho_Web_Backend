@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/svg/shanks.jpg" style="height: 200px;" class="rounded-circle" alt="">
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 my-auto">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>Welcome to FindPho {{ $user->username }}!</h1>
                    <a href="/pho/create">Add new picture</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>Nice to see that you already have {{ $user->picture->count() }} shoots!</strong></div>
                </div>

                <div class="pt-4 font-weight-bold">
                    {{ $user->profile->title ?? "" }}

                <div>
                    {{ $user->profile->description ?? ""}}
                </div>
                <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->picture as $picture)
                <div class="col-4 pb-4">
                    <img src="/storage/{{ $picture->image }}" class="w-100">
                </div>
            @endforeach
        </div>
    </div>
@endsection

