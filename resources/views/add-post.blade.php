@extends('layouts.base')
@section('content')

    <section class="page-content start">
        <form action="{{ route('addPost.store') }}" class="add-post center" method="post" enctype="multipart/form-data">
            @csrf
            <textarea class="start" name="title" placeholder="Write here...."></textarea>
            <div class="center">
                <input type="file" name="photo" id="photo">
                <label class="center" for="photo"><i class="fa-solid fa-image"></i>upload image</label>
            </div>
            <button type="submit">Add Post</button>
        </form>
    </section>

@endsection
