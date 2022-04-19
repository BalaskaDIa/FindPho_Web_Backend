@extends('layouts.app')

@section('content')
<div class="container">

<div class="row justify-content-center">
<div class="col-12 col-xl-10">
    <div class="card-header">
        <h2 class="row justify-content-center">{{ $picture->title ?? ""}}</h2>
    </div>

    <div class="card-body">
        <div class="row">

            <div class="col-8 big_img">
                <img src="/storage/{{ $picture->image }}" class="w-100" alt="">
            </div>

            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <a href="/profile/{{$picture->user->id}}">
                            <img src="/storage/{{ $picture->user->profile->image}}" class="rounded circle w-100" style="max-width:50px" alt="">
                            </a>
                        </div>
                        <div>
                            <div>
                                <h2 class="font-weight-bold">
                                    <a href="/profile/{{$picture->user->id}}">
                                        <span class="text-white">{{ $picture->user->username }}</span>
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <hr>


                    <h3>Category: {{ $picture->categories->name ?? ""}}</h3>
                    <p>Description: {{ $picture->description ?? ""}}</p>

                    <hr>

                <div class="container comments" style="border-radius: 20px;"> @comments(['model' => $picture,'perPage' => 4]) </div>

                </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection

