<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Photo Album')</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <header>
        <h1>My Photo Album</h1>
        <h2>Explore the world through different themes and timeless moments.</h2>
    </header>

    <nav>
        <a href="{{ url('home') }}">Home</a>
        <a href="{{ url('page1') }}">Architectural Infrastructures</a>
        <a href="{{ url('page2') }}">Cafes</a>
        <a href="{{ url('page3') }}">Museums</a>
        <a href="{{ url('page4') }}">Landscapes</a>
        <a href="{{ url('page5') }}">Beaches</a>
    </nav>

    <main>
        @yield('content')
    </main>
    <footer>
    </footer>
</body>
</html>