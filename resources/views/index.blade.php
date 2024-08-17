@extends('layouts.base')

@section('content')
    <!-- posts -->
    <section class="page-content start">
        <a href="{{ route('addPost.create') }}" class="center">
            add post
        </a>
        <div class="posts start">
            <!-- post div -->
            @foreach($posts as $post)
                <div class="post center">
                    <div class="head center">
                        <div class="user start">
                            <img src="{{ Storage::url($post->user_photo) }}" alt="">
                            <h1>{{ $post->user_name }}</h1>
                        </div>
                        <div class="date"><p>{{ $post->created_at }}</p></div>
                    </div>
                    <div class="content" style="display: flex;flex-direction: column;gap: 20px">
                        <!-- photo or text -->
                        <p class="center">
                            {{ $post->title }}
                        </p>
                        @if($post->photo == '')
                            <img src="" alt="">
                        @else
                            <img src="{{ Storage::url($post->photo) }}" alt="post">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
