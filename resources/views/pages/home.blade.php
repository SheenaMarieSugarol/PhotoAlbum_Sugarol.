<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Photo Album</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: 'Playfair Display', sans-serif;
            background-color: #dfd9c9ff;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #d4c2a8;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 3em;
            color: #674f2dff;
        } 
        header h2 {
            font-family: 'Lora';
            font-size: 1em;
            padding: 5px;
            color: #674f2dff;
        } 
        nav {
            text-align: center;
            margin: 40px 0;
        }
        nav a {
            text-decoration: none;
            color: #5a4a32;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        footer {
            margin-top: 20px;
            padding: 40px;
            background-color: #d4c2a8;
            color: #5a4a32;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Photo Album</h1>
        <h2>Explore the beauty of the world through stunning views that inspire awe and tranquility. Click on a page link below to dive into those views!</h2>
    </header>
    <nav>
        <a href="home">Home</a>
        <a href="page1">Architectural Infrastructures</a>
        <a href="page2">Cafes</a>
        <a href="page3">Museums</a></a>
        <a href="page4">Landscapes</a>
        <a href="page5">Beaches</a>
    </nav> 
    <main>
      <footer>
         <p>© 2025 My Photo Album. All rights reserved.</p>
      </footer>
    </main>
</body>
</html>
