<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Application - @yield('title')</title>
    <style>
        .active {
            font-weight: bold;
            color: blue; /* Change this to your desired highlight color */
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li class="{{ $active === 'landing' ? 'active' : '' }}"><a href="{{ route('landing') }}">Landing</a></li>
            <li class="{{ $active === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ $active === 'photos' ? 'active' : '' }}"><a href="{{ route('photos') }}">Photos</a></li>
            <li class="{{ $active === 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Created by [Your Name]. All rights reserved.</p>
    </footer>
</body>
</html>




