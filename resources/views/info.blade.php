@extends('layouts.base')
@section('content')
    <section class="page-content start">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('Info.update',['id'=>$myData->id]) }}" class="update center">
            @csrf
            @method('Put')
            <div class="input center">
                <h1>name</h1>
                <input value="{{ $myData->name }}" type="text" name="name" placeholder="username">
            </div>
            <div class="input center">
                <h1>email</h1>
                <input value="{{ $myData->email }}" type="text" name="email" placeholder="user@example.com">
            </div>
            <div class="input center">
                <h1>country</h1>
                <input value="{{ $myData->country }}" type="text" name="country" placeholder="(egypt,saudi arabia......)">
            </div>
            <div class="input center">
                <h1>city</h1>
                <input value="{{ $myData->city }}" type="text" name="city" placeholder="(cairo,riyadh......)">
            </div>
            <div class="input center">
                <h1>educational level</h1>
                <select name="education">
                    <option value="student" @selected($myData->education == 'student')>student</option>
                    <option value="graduated" @selected($myData->education == 'graduated')>graduated</option>
                </select>
            </div>
            <div class="input center">
                <h1>marital status</h1>
                <select name="status">
                    <option value="single" @selected($myData->status == 'single')>single</option>
                    <option value="married" @selected($myData->status == 'married')>married</option>
                </select>
            </div>
            <!-- <div class="input center">
                <h1>date of birth</h1>
                <input type="date" name="date-birth">
            </div> -->

            <div class="input center">
                <h1>New password</h1>
                <input type="password" name="password" placeholder="password">
                <i class="fa-solid fa-eye" style="color: var(--black-color)"></i>
            </div>
            <div class="input center">
                <h1>confirm new password</h1>
                <input type="password" name="password_confirmation" placeholder="confirm password">
                <i class="fa-solid fa-eye" style="color: var(--black-color)"></i>
            </div>
            <div class="input">
                <button type="submit">Update</button>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/show.js') }}"></script>
@endpush
