@extends('layouts.base')
@section('content')
    <!-- page start -->
    <section class="page-content start">
        @foreach($users as $user)
            <div class="result start">
                @if($user->id == auth()->id())
                    <a href="{{ route('MyProfile.index') }}" class="user start">
                        <img src="{{ Storage::url($user->photo) }}" alt="">
                        <h1>{{ $user->name }}</h1>
                    </a>
                @else
                    <a href="{{ route('userProfile',['id'=>$user->id]) }}" class="user start">
                        <img src="{{ Storage::url($user->photo) }}" alt="">
                        <h1>{{ $user->name }}</h1>
                    </a>
                @endif
            </div>
        @endforeach
    </section>
@endsection
