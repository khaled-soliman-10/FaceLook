@extends('layouts.base')
@section('content')
    <section class="page-content start">
        <div class="my-posts center">
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
                    <div class="forms center">
                        <form method="post" action="{{ route('addPost.forceDelete',['id'=>$post->id]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" name="delete">Delete</button>
                        </form>
                        <form method="post" action="{{ route('addPost.restore',['id'=>$post->id]) }}">
                            @csrf
                            <button type="submit" name="delete">Restore</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/trash.css') }}">
@endpush
