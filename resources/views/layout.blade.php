<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ $active === 'home' ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('photos') }}" class="{{ $active === 'photos' ? 'active' : '' }}">Photos</a></li>
            <li><a href="{{ route('contact') }}" class="{{ $active === 'contact' ? 'active' : '' }}">Contact</a></li>
        </ul>
    </nav>

    <div id="content">
        @yield('content')
    </div>

    <footer>
        <p>Activity by [Your Name]</p>
    </footer>
</body>
</html>
