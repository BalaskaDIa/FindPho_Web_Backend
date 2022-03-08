@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/storage/{{$user->profile->image}}" style="height: 200px;" class="rounded-circle" alt="">
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 my-auto">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>Welcome to FindPho {{ $user->username }}!</h1>

                    @can('update',$user->profile)
                        <a href="/pho/create">Add New Picture</a>
                    @endcan

                </div>
                @can('update',$user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    @if($user->picture->count() == 0)
                    <div class="pr-5"><strong>You didn't upload anything yet!</strong></div>
                    @elseif($user->picture->count() == 1)
                    <div class="pr-5"><strong>Nice to see that you already have {{ $user->picture->count() }} shoot!</strong></div>
                    @else
                    <div class="pr-5"><strong>Nice to see that you already have {{ $user->picture->count() }} shoots!</strong></div>
                    @endif
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
                    <a href="/pho/{{ $picture->id }}">
                        <img src="/storage/{{ $picture->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

