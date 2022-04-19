@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-xl-10">
                    <div class="card-header">
                        <div class="row pb-5">

                            <div class="col-md-7">
                                <div class="d-flex justify-content-between">
                                    @can('update',$user->profile)
                                        <h1><strong>Welcome to FindPho {{ $user->username }}!</strong></h1>
                                    @endcan
                                        @can('update',$user->profile)
                                            <div class="d-flex">
                                                @if($user->picture->count() == 0)
                                                    <h3>You didn't upload anything yet!</h3>
                                                @elseif($user->picture->count() == 1)
                                                    <h3>Nice to see that you already have {{ $user->picture->count() }} shoot!</h3>
                                                @else
                                                    <h3>Nice to see that you already have {{ $user->picture->count() }} shoots!</h3>
                                                @endif
                                            </div>
                                        @endcan
                                </div>

                                        <h3 class="pt-4 font-weight-bold">
                                            Title: {{ $user->profile->title ?? "" }}

                                            <div>
                                                Description: {{ $user->profile->description ?? ""}}
                                            </div>
                                            <div><a href="{{$user->profile->url ?? '#'}}">{{ $user->profile->url ?? "" }}</a></div>
                                        </h3>
                                </div>
                            <div class="col-md-3">
                                <img src="{{$user->profile->profileImage()}}" style="height: 200px;" class="rounded-circle" alt="">
                            </div>
                            <div class="col-md-2">
                            @can('update',$user->profile)
                                <a href="/pho/create"><button type="button" class="btn btn-light">Add Photo</button></a>
                            @endcan
                            </div>

                        </div>
                        <div class="card-body row">
                            @foreach($pictures as $picture)
                                <div class="col-4 pb-4 pic">
                                    <a href="/pho/{{ $picture->id }}">
                                        <img src="/storage/{{ $picture->image }}" class="w-100 image">
                                    </a>
                                    <div class="middle">
                                        <a href="/pho/{{ $picture->id }}"><button class="text">{{$picture->title}}</button></a>
                                    </div>
                                    @can('update',$user->profile)
                                            <div class="top">
                                                <a href="/pho/{{ $picture->id }}/edit"><button class="text3">Change details</button></a>
                                            </div>
                                    @endcan
                                    @can('update',$user->profile)
                                    <form action="{{url('/delete-pho/'.$picture->id) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}

                                        <div class="middle2">
                                            <button onclick="return confirm('Are you sure about deleting this photo?')" class="text2">Delete</button>
                                        </div>
                                    </form>
                                    @endcan

                                </div>

                            @endforeach
                        </div>
                        <p>{{ $pictures->links() }}</p>
                        </div>
                    </div>
                </div>
            </div>
@endsection

