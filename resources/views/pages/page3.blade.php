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
            background-color: #4b986df2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #337b54f2;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 3em;
            color: #fdfdfdff;
        } 
        header h2 {
            font-family: 'Lora';
            font-size: 1em;
            padding: 5px;
            color: #fdfdfdff;
        } 
        nav {
            text-align: center;
            margin: 40px 0;
        }
        nav a {
            text-decoration: none;
            color: #fdfdfdff;
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
            background-color: #2c825eff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
            text-align: center;
            color: #fdfdfdff;
        }
        .image-box img {
            border-radius: 8px;
        }
        footer {
            margin-top: 20px;
            padding: 40px;
            background-color: #337b54f2;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Museums</h1>
        <h2>Within museum walls, echoes of the past dance with whispers of time, where every artifact tells a story and every hall preserves the soul of history.</h2>
    </header>

    <nav>
        <a href="{{ url('home') }}">Home</a>
        <a href="{{ url('page1') }}">Architectural Infrastructures</a>
        <a href="{{ url('page2') }}">Cafes</a>
        <a href="{{ url('page4') }}">Landscapes</a>
        <a href="{{ url('page5') }}">Beaches</a>
    </nav>

    <main class="image-grid">
        <div class="image-box">
            <img src="{{ asset('images/national museum cebu.jpg') }}" alt="Cebu Museum" style= "width: 400px; height: 400px">
            <p>Cultural treasure trove that showcases the rich history, art, and heritage of the region.</p>
            <img src="{{ asset('images/national museum.jpg') }}" alt="National Museum- Philippines" style= "width: 400px; height: 400px">
            <p>Housing carefully preserved artifacts, historical exhibits, and works of local artistry, it offers visitors an immersive journey through past and present.</p>
            <img src="{{ asset('images/architectural museum.jpg') }}" alt="National Museum" style= "width: 400px; height: 400px">
            <p>The museum provides a meaningful space to explore, reflect, and appreciate the stories that have shaped the Philippines.</p>
            <img src="{{ asset('images/museum in Cebu.jpg') }}" alt="Museum in Cebu" style= "width: 400px; height: 400px">
            <p>Stands as a proud keeper of the island’s heritage, where history, culture, and artistry converge.</p>
            <img src="{{ asset('images/magellans boat.jpeg') }}" alt="Ferdinand Magellans Boat" style= "width: 400px; height: 400px">
            <p>The boat Ferdinand Magellan sailed during his historic expedition to the Philippines—a vessel that symbolizes courage, exploration that connected Cebu to world history.</p>
            <img src="{{ asset('images/casa gorordo museum.jpg') }}" alt="Casa Gorordo Museum" style= "width: 400px; height: 400px">
            <p>A preserved Spanish colonial house that offers a glimpse into 19th-century Filipino life.</p>
            <img src="{{ asset('images/cebu tamaraw.jpg') }}" alt="Cebu Tamaraw" style= "width: 400px; height: 400px">
            <p>Though endangered, it represents a vital part of the country’s natural heritage and conservation efforts, reminding us of the importance of protecting Cebu’s ecological treasures.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/sedimentary rocks cebu.jpg') }}" alt="Sedimentary Rocks Cebu" style= "width: 400px; height: 400px">
            <p>Cebu’s sedimentary rocks reveal the island’s geological history, formed over millions of years from layers of sand, silt, and organic material.</p>
            <img src="{{ asset('images/fort san pedro.jpg') }}" alt="Fort San Pedro" style= "width: 400px; height: 400px">
            <p>A historic military defense structure built by the Spanish in the 16th century, making it the oldest and smallest fort in the Philippines.</p>
            <img src="{{ asset('images/fort san pedro cebu.jpg') }}" alt="Fort San Pedro Cebu" style= "width: 400px; height: 400px">
            <p>With its stone walls, watchtowers, and surrounding gardens, the fort offers a glimpse into Cebu’s colonial past, serving as both a cultural landmark and a reminder of the city’s rich history.</p>
            <img src="{{ asset('images/museo sugbo.jpg') }}" alt="Museo Sugbo" style= "width: 400px; height: 400px">
            <p>A house in Cebu’s historic former provincial jail, is a cultural and historical museum that showcases the rich heritage of the province.</p>
            <img src="{{ asset('images/museum in spain barcelona.jpg') }}" alt="Museum in Barcelona Spain" style= "width: 400px; height: 400px">
            <p>Barcelona’s museums are vibrant gateways to art, history, and culture, showcasing everything from Gaudí’s architectural genius to centuries of Catalan heritage.</p>
            <img src="{{ asset('images/museo del prado.jpg') }}" alt="Museo del Prado" style= "width: 400px; height: 400px">
            <p>Renowned for its vast collection of European masterpieces spanning the 12th to 19th centuries.</p>
            <img src="{{ asset('images/museum in tokyo japan.jpg') }}" alt="Museum in Tokyo Japan" style= "width: 400px; height: 400px">
            <p>Tokyo’s museums offer a fascinating blend of tradition and modernity, showcasing everything from ancient artifacts and samurai heritage to cutting-edge contemporary art.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/museum of korea.jpg') }}" alt="Museum in Korea" style= "width: 400px; height: 400px">
            <p>A cultural treasure trove that preserves and showcases the rich history, art, and heritage of Korea’s royal dynasties.</p>
            <img src="{{ asset('images/national folk museum of korea.jpg') }}" alt="National Folk Museum in Korea" style= "width: 400px; height: 400px">
            <p>Offers a stylish urban escape, blending modern design with cozy charm and majestic symbol of Korea’s royal heritage, where history, culture, and architectural splendor come alive.</p>
            <img src="{{ asset('images/palace of korea.jpeg') }}" alt="Palace of Korea" style= "width: 400px; height: 400px">
            <p>The museum offers visitors a fascinating glimpse into the life, culture, and traditions of Korea’s past, making it a must-visit destination for history and culture enthusiasts.</p>
            <img src="{{ asset('images/baguio museum.jpg') }}" alt="Baguio Museum" style= "width: 400px; height: 400px">
            <p>A haven of culture and history in the City of Pines, where art and heritage tell Baguio’s story.</p>
            <img src="{{ asset('images/cultural heritage of leyte.jpg') }}" alt="Cultural Heritage of Leyte" style= "width: 400px; height: 400px">
            <p>A vibrant tribute to faith and tradition, preserving the history and devotion surrounding the Sto. Niño in Leyte.</p>
            <img src="{{ asset('images/oriental mindoro museum.jpg') }}" alt="Oriental Mindoro Museum" style= "width: 400px; height: 400px">
            <p>A window into Oriental Mindoro’s rich culture and history, showcasing its traditions, heritage, and local artistry.</p>

        </div>
    </main>

    <footer>
         <p>© 2025 My Photo Album. All rights reserved.</p>
    </footer>
</body>
</html>