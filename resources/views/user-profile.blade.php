@extends('layouts.base')
@section('content')
    <section class="page-content start">
        <div class="info center">
            <!-- user img & name -->
            <div class="user center">
                <div class="img">
                    <img src="{{ Storage::url($user->photo) }}" alt="">
                    <button><i class="fa-solid fa-eye"></i> </button>
                </div>
                <h1>{{ $user->name }}</h1>
            </div>
            <!-- user details -->
            <div class="details start  ">
                <div class="detail center">
                    <h1>country : </h1>
                    <h3>{{ $user->country }}</h3>
                </div>
                <div class="detail center">
                    <h1>city : </h1>
                    <h3>{{ $user->city }}</h3>
                </div>
                <div class="detail center">
                    <h1>date of birth : </h1>
                    <h3>{{ $user->date_of_birth }}</h3>
                </div>
                <div class="detail center">
                    <h1>marital status : </h1>
                    <h3>{{ $user->status }}</h3>
                </div>
                <div class="detail center">
                    <h1>educational level : </h1>
                    <h3>{{ $user->education }}</h3>
                </div>
            </div>
        </div>
        <!-- user posts -->
        <div class="my-posts center">
            <!-- post div -->
            @foreach($posts as $post)
            <div class="post center">
                <div class="head center">
                    <div class="user start">
                        <img src="{{ Storage::url($user->photo) }}" alt="">
                        <h1>{{ $user->name }}</h1>
                    </div>
                    <div class="date"><p>{{ $post->created_at }}</p></div>
                </div>
                <div class="content center">
                    <!-- photo or text -->
                    <p>
                        {{ $post->title }}
                    </p>
                    @if($post->photo == '')
                        <img src="" alt="">
                    @else
                        <img src="{{ Storage::url($post->photo) }}" alt="">
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <!-- show photo -->
        <div class="hidden-img center">
            <img src="{{ Storage::url($user->photo) }}" alt="">
            <button><i class="fa-solid fa-circle-xmark"></i></button>
        </div>
    </section>

@endsection
