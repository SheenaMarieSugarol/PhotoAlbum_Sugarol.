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
            background-color: #2c2b2bf2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #242525ff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 3em;
            color: #e1d3d3ff;
        } 
        header h2 {
            font-family: 'Lora';
            font-size: 1em;
            padding: 5px;
            color: #e1d3d3ff;
        } 
        nav {
            text-align: center;
            margin: 40px 0;
        }
        nav a {
            text-decoration: none;
            color: #e1d3d3ff;
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
            background-color: #3c3f3fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
            text-align: center;
            color: #e1d3d3ff;
        }
        .image-box img {
            border-radius: 8px;
        }
        footer {
            margin-top: 20px;
            padding: 40px;
            background-color: #242525ff;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Cafes</h1>
        <h2>Where coffee steams and sunlight gleams, and every cup awakens dreams. From cozy nooks to bustling scenes, sip, savor, and embrace life’s little themes.</h2>
    </header>

    <nav>
        <a href="{{ url('home') }}">Home</a>
        <a href="{{ url('page1') }}">Architectural Infrastructures</a>
        <a href="{{ url('page3') }}">Museums</a>
        <a href="{{ url('page4') }}">Landscapes</a>
        <a href="{{ url('page5') }}">Beaches</a>
    </nav>

    <main class="image-grid">
        <div class="image-box">
            <img src="{{ asset('images/modern cafe shop.jpg') }}" alt="Black and White Cafe" style= "width: 400px; height: 400px">
            <p>Minimalist space where every sip feels timeless and every moment stylish.</p>
            <img src="{{ asset('images/coffee counter.jpg') }}" alt="Minimalist Coffee Counter" style= "width: 400px; height: 400px">
            <p>Simple, sleek, and focused on the perfect cup of coffee.</p>
            <img src="{{ asset('images/cafe shop.jpg') }}" alt="Cafe Shop" style= "width: 400px; height: 400px">
            <p>A cozy café where great coffee, sweet treats, and warm vibes come together.</p>
            <img src="{{ asset('images/cafe de flore.jpg') }}" alt="Cafe De Flore" style= "width: 400px; height: 400px">
            <p>Classic Parisian vintage café with Art Deco interiors.</p>
            <img src="{{ asset('images/antico caffe.jpg') }}" alt="Antico Caffe Greco" style= "width: 400px; height: 400px">
            <p>Vintage interior with classic paintings and historical decor.</p>
            <img src="{{ asset('images/cafe adriatico.jpg') }}" alt="LCJ Restaurants" style= "width: 400px; height: 400px">
            <p>Vintage Spanish-inspired interiors.</p>
            <img src="{{ asset('images/bos coffee.jpg') }}" alt="Bo's Coffee" style= "width: 400px; height: 400px">
            <p>Modern Filipino coffee chain with vintage touches.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/toby.jpg') }}" alt="Toby's Cafe" style= "width: 400px; height: 400px">
            <p>Contemporary vintage interiors with open spaces. Specialty coffee from single-origin beans.</p>
            <img src="{{ asset('images/commune cafe.jpg') }}" alt="Commune Cafe" style= "width: 400px; height: 400px">
            <p>A rustic and cozy vintage café where warm wooden interiors meet charming local crafts, creating a welcoming space to relax, savor artisanal coffee, and enjoy a touch of timeless charm.</p>
            <img src="{{ asset('images/kuppa roastery.jpg') }}" alt="Kuppa Roastery" style= "width: 400px; height: 400px">
            <p>A modern-vintage café that blends contemporary style with nostalgic charm, offering a warm and inviting ambiance, carefully crafted beverages, and soak in a cozy, welcoming atmosphere.</p>
            <img src="{{ asset('images/yardstick.jpg') }}" alt="Yardstick Cafe" style= "width: 400px; height: 400px">
            <p>A minimalist vintage café where clean lines and abundant natural light create a serene and airy atmosphere, inviting guests to unwind.</p>
            <img src="{{ asset('images/pamahaw.jpg') }}" alt="Pamahaw Cafe" style= "width: 400px; height: 400px">
            <p>Welcoming breakfast haven where locals and visitors alike can savor hearty morning meals, authentic local flavors, and inviting atmosphere that feels like home.</p>
            <img src="{{ asset('images/capu cafe.jpeg') }}" alt="Capu Cafe" style= "width: 400px; height: 400px">
            <p>With its cozy interiors, warm lighting, and inviting atmosphere, it’s the perfect place to unwind.</p>
            <img src="{{ asset('images/pick up coffee.jpg') }}" alt="Pick up Coffee" style= "width: 400px; height: 400px">
            <p>A cozy retreat for coffee lovers, where every cup is crafted with care and passion.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/cafe central vienna.jpg') }}" alt="Cafe Central Vienna" style= "width: 400px; height: 400px">
            <p>A favorite gathering place for locals and visitors alike, Café Central not only delights the senses but also immerses guests in the rich cultural and intellectual history of Vienna.</p>
            <img src="{{ asset('images/cafe manhattan.jpg') }}" alt="Cafe Manhattan" style= "width: 400px; height: 400px">
            <p>Offers a stylish urban escape, blending modern design with cozy charm.</p>
            <img src="{{ asset('images/cafe pushkin.jpg') }}" alt="Cafe Pushkin" style= "width: 400px; height: 400px">
            <p>Known for its refined pastries, exquisite traditional dishes, and rich, aromatic coffee, the café offers guests a uniquely immersive experience.</p>
            <img src="{{ asset('images/starbucks.jpeg') }}" alt="Starbucks" style= "width: 400px; height: 400px">
            <p>Whether you’re savoring a classic espresso, trying a seasonal favorite, or enjoying a quick bite, Starbucks delivers a consistent and comforting experience that feels familiar wherever you go.</p>
            <img src="{{ asset('images/blue bottle morse.jpg') }}" alt="Blue Bottle Morse" style= "width: 400px; height: 400px">
            <p>With its clean, minimalist interiors and calm, inviting atmosphere, the café offers a thoughtful space to enjoy beautifully crafted pour-overs, espresso drinks, and pastries made with care.</p>
            <img src="{{ asset('images/original starbucks.jpg') }}" alt="Original Starbucks" style= "width: 400px; height: 400px">
            <p>Preserving its classic brown logo, vintage charm, and old-world interior, the shop offers visitors a nostalgic glimpse into the brand’s humble beginnings.</p>

        </div>
    </main>

    <footer>
         <p>© 2025 My Photo Album. All rights reserved.</p>
    </footer>
</body>
</html>