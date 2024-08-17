<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaceLook</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

<!-- header start -->
<header>
    <div class="h-content start">
        <div class="title center">
            <a href="{{ route('main.index') }}" class="center">
                <i class="fa-solid fa-l center"></i>
                <h1>FaceLook</h1>
                <!-- FaceLook -->
            </a>
        </div>
        <div class="search center">
            <form action="{{ route('search.index') }}" method="get" class="center">
                @csrf
                <input type="text" name="name" placeholder="Search for users">
                <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <h1>{{ Auth::user()->name }}</h1>
    </div>
</header>

<!-- page start -->
<section class="main-page start">
    <!-- aside -->
    <aside class="center">
        <div class="links start">
            <ul class="start">
                <li><a href="{{ route('MyProfile.index') }}"><i class="fa-solid fa-user"></i> My Profile</a></li>
                <li>
                    <div class="settings start">
                        <h1 class="start"><i class="fa-solid fa-gears"></i> settings</h1>
                        <ul class="start">
                            <li><a href="{{ route('Info.index',['id'=>auth()->id()]) }}"><i class="fa-regular fa-address-card"></i> personal details</a></li>
                            <li><a href="{{ route('Img.index',['id'=>auth()->id()]) }}"><i class="fa-solid fa-camera-retro"></i> profile picture</a></li>
                            <li><a href="{{ route('addPost.index') }}"><i class="fa-solid fa-trash"></i> trashed posts</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="mode start">
                <button class="start">Mode <i class="fa-solid fa-angle-right"></i></button>
                <ul class="start">
                    <li><button class="dark start"><i class="fa-solid fa-moon"></i> Dark</button></li>
                    <li><button class="light start"><i class="fa-solid fa-sun"></i> Light</button></li>
                </ul>
            </div>
        </div>
        <div class="out start">
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit" name="out">Log out</button>
            </form>
        </div>
    </aside>

@yield('content')

</section>
<script src="{{ asset('js/main.js') }}"></script>
@stack('scripts')
</body>
</html>
