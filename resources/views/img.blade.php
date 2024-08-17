@extends('layouts.base')
@section('content')
    <!-- img -->
    <section class="page-content start">
        <h1>select new profile picture</h1>
        <div class="img center">
            <img src="{{ Storage::url($img->photo) }}" alt="">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('Img.update',['id'=>$img->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('Put')
                <div>
                    <input type="file" name="photo" id="img">
                    <label class="center" for="img"><i class="fa-solid fa-upload"></i>select img</label>
                </div>

                <button type="submit" name="update-img">update</button>

            </form>
        </div>
    </section>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/img.css') }}">
@endpush
