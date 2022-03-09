@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
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
                                        <span class="text-dark">{{ $picture->user->username }}</span>
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                <hr>


                <p>{{ $picture->caption }}</p>

            </div>
        </div>
    </div>
    </div>
@endsection

