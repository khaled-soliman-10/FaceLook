{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sign-up.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>FaceLook</title>
</head>
<body>
<div class="main center">
    <div class="box center">
        <div class="title center">
            <i class="fa-solid fa-l center"></i>
            <h1>FaceLook</h1>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" class="center" action="{{ route('register') }}">
            @csrf
            <div class="input center">
                <h1>name</h1>
                <input type="text" value="{{ old('name') }}" name="name" placeholder="username">
            </div>
            <div class="input center">
                <h1>email</h1>
                <input type="text" value="{{ old('email') }}" name="email" placeholder="user@example.com">
            </div>
            <div class="input center">
                <h1>country</h1>
                <input type="text" value="{{ old('country') }}" name="country" placeholder="(egypt,saudi arabia......)">
            </div>
            <div class="input center">
                <h1>City</h1>
                <input type="text" value="{{ old('city') }}" name="city" placeholder="(cairo,riyadh......)">
            </div>
            <div class="input center">
                <h1>educational level</h1>
                <select name="education">
                    <option value="student">student</option>
                    <option value="graduated">graduated</option>
                </select>
            </div>
            <div class="input center">
                <h1>Gender</h1>
                <select name="gender">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="input center">
                <h1>marital status</h1>
                <select name="status">
                    <option value="single">single</option>
                    <option value="married">married</option>
                </select>
            </div>
            <div class="input center">
                <h1>date of birth</h1>
                <input type="date" name="date_of_birth">
            </div>

            <div class="input center">
                <h1>password</h1>
                <input type="password" name="password" placeholder="password">
                <i class="fa-solid fa-eye"></i>
            </div>
            <div class="input center">
                <h1>confirm password</h1>
                <input type="password" name="password_confirmation" placeholder="confirm password">
                <i class="fa-solid fa-eye"></i>
            </div>

            <button type="submit">Create</button>
        </form>
        <a href="{{ route('login') }}">Log In</a>
    </div>
</div>
<script src="{{ asset('js/show.js') }}"></script>
</body>
</html>
