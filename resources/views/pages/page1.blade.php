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
            background-color: #c3dfefff;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #9ed2e6ff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 3em;
            color: #5576a7ff;
        } 
        header h2 {
            font-family: 'Lora';
            font-size: 1em;
            padding: 5px;
            color: #5576a7ff;
        } 
        nav {
            text-align: center;
            margin: 40px 0;
        }
        nav a {
            text-decoration: none;
            color: #5576a7ff;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .theme-section {
            margin-bottom: 40px;
            text-align: center;
        }
        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        } 
        .image-box {
            margin: 30px;
            background-color: #9fb5dfff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
            text-align: center;
            color: #0d0d0dff;
        }
        .image-box img {
            border-radius: 8px;
        }
        footer {
            margin-top: 20px;
            padding: 40px;
            background-color: #9ed2e6ff;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Architectural Infrastructures</h1>
        <h2>Dive into a world where creativity meets structure, wherein timeless architectural wonders that tell stories through walls, curves, and skylines.</h2>
    </header>

    <nav>
        <a href="{{ url('home') }}">Home</a>
        <a href="{{ url('page2') }}">Cafes</a>
        <a href="{{ url('page3') }}">Museums</a>
        <a href="{{ url('page4') }}">Landscapes</a>
        <a href="{{ url('page5') }}">Beaches</a>
    </nav>

    <main class="image-grid">
        <div class="image-box">
            <img src="{{ asset('images/london city.jpg') }}" alt="City of London" style= "width: 400px; height: 400px">
            <p>An impressive high-rise that shapes and symbolizes London’s skyline.</p>
            <img src="{{ asset('images/newyork skyscraper.jpeg') }}" alt="Skyscraper in New York" style= "width: 400px; height: 400px">
            <p>A soaring masterpiece that captures the city of New York's bold spirit and relentless ambition.</p>
            <img src="{{ asset('images/skytree.jpg') }}" alt="Tokyo Skytree" style= "width: 400px; height: 400px">
            <p>A neofuturistic modern tower in Tokyo, Japan, one of the tallest structures in the world.</p>
            <img src="{{ asset('images/marina bay.jpg') }}" alt="Marina Bay Singapore" style= "width: 400px; height: 400px">
            <p>A futuristic resort complex with three towers and a SkyPark with the famous infinity pool on top in Singapore.</p>
            <img src="{{ asset('images/oracle arena.jpg') }}" alt="Oracle Arena San Francisco" style= "width: 400px; height: 400px">
            <p>A legendary venue hosting thrilling sports events, concerts, and memorable experiences in Oracle Arena, San Francisco.</p>
            <img src="{{ asset('images/walt disney.jpg') }}" alt="Walt Disney Concert Hall" style= "width: 400px; height: 400px">
            <p>Striking design meets world-class music experiences in Los Angeles, USA.</p>
            <img src="{{ asset('images/modern tokyo japan.jpg') }}" alt="Architectural BUilding in Japan" style= "width: 400px; height: 400px">
            <p>Dive in Tokyo's Architectural Building, where architecture meets aesthetic.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/modern architectural.jpg') }}" alt="Modern Architectural" style= "width: 400px; height: 400px">
            <p>Let's dive through architectural buildings, where design, history, and creativity come together to shape the spaces we live in and admire.</p>
            <img src="{{ asset('images/coloseum.jpg') }}" alt="Famous Architectural in Rome" style= "width: 400px; height: 400px">
            <p>An architectural marvel in Rome that stands as a timeless symbol of history, strength, and grandeur.</p>
            <img src="{{ asset('images/louvre pyramid.jpg') }}" alt="Louvere Pyramid in France" style= "width: 400px; height: 400px">
            <p>A modern glass-and-metal pyramid designed by I.M. Pei, serving as the main entrance to the Louvre Museum.</p>
            <img src="{{ asset('images/ayala makati.jpg') }}" alt="Ayala Makati City" style= "width: 400px; height: 400px">
            <p>In Ayala in Makati, where modern architecture, shopping, and urban life come together seamlessly..</p>
            <img src="{{ asset('images/bgc.jpg') }}" alt="Bonifacio Global City" style= "width: 400px; height: 400px">
            <p>Experience the cutting-edge architecture meets vibrant city life in a truly modern landscape in BGC.</p>
            <img src="{{ asset('images/lotte tower seoul.jpg') }}" alt="Lotte Tower in Seoul" style= "width: 400px; height: 400px">
            <p>A towering landmark offering breathtaking views and modern architectural elegance in .</p>
            <img src="{{ asset('images/seoul city hall.jpg') }}" alt="Seoul City Hall" style= "width: 400px; height: 400px">
            <p>Modern glass and curved roof blending with the historical old city hall.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/twin pack.jpg') }}" alt="Iconic Architectural Building" style= "width: 400px; height: 400px">
            <p>An elegant structure showcasing timeless architecture was constructed in Malaysia.</p>
            <img src="{{ asset('images/Nustar Cebu.jpg') }}" alt="Nustar Cebu" style= "width: 400px; height: 400px">
            <p>A modern landmark blending sleek design with Cebu’s vibrant urban energy.</p>
            <img src="{{ asset('images/ayala cebu.jpg') }}" alt="Ayala Center Cebu" style= "width: 400px; height: 400px">
            <p>A premier destination in Cebu where shopping and dining come together in a stylish and modern setting.</p>
            <img src="{{ asset('images/tops cebu.jpg') }}" alt="Tops Cebu" style= "width: 400px; height: 400px">
            <p>A scenic viewpoint offering breathtaking panoramic views of Cebu City and its surrounding islands.</p>
            <img src="{{ asset('images/sm seaside cebu.jpg') }}" alt="SM Seaside Cebu" style= "width: 400px; height: 400px">
            <p>A sprawling seaside mall combining modern architecture, shopping, and entertainment with stunning ocean views here in Cebu.</p>
            <img src="{{ asset('images/paris foundation.jpg') }}" alt="Louis Vuitton Foundation" style= "width: 400px; height: 400px">
            <p>Contemporary, glass-sailed structure resembling a ship.</p>

        </div>
    </main>

    <footer>
         <p>© 2025 My Photo Album. All rights reserved.</p>
    </footer>
</body>
</html>