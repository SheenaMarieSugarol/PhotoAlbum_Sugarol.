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
            background-color: #f0a5b2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #cc6172f2;
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
            background-color: #df8392f2;
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
            background-color: #cc6172f2;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Landscapes</h1>
        <h2>Explore the world's breathtaking vistas, where the colors of the earth and moods unfold in every frame, inviting you to wander.</h2>
    </header>

    <nav>
        <a href="{{ url('home') }}">Home</a>
        <a href="{{ url('page1') }}">Architectural Infrastructures</a>
        <a href="{{ url('page2') }}">Cafes</a>
        <a href="{{ url('page3') }}">Museums</a>
        <a href="{{ url('page5') }}">Beaches</a>
    </nav>

    <main class="image-grid">
        <div class="image-box">
            <img src="{{ asset('images/bulkang mayon.jpg') }}" alt="Bulkang Mayon" style= "width: 400px; height: 400px">
            <p>Known for its perfect cone shape, Bulkang Mayon stands as a majestic symbol of nature’s power and beauty in the Philippines.</p>
            <img src="{{ asset('images/rice terraces.jpg') }}" alt="Banaue Rice terraces" style= "width: 400px; height: 400px">
            <p>A breathtaking marvel carved by the Ifugao ancestors, the Banaue Rice Terraces showcase centuries of ingenuity and harmony with nature.</p>
            <img src="{{ asset('images/taal volcano.jpeg') }}" alt="Taal Volcano" style= "width: 400px; height: 400px">
            <p>One of the Philippines’ most iconic natural wonders, rises dramatically from the heart of Taal Lake. Known for its picturesque crater and stunning surroundings, it is a captivating blend of natural beauty and geological marvel.</p>
            <img src="{{ asset('images/chocolate hills.jpg') }}" alt="Chocolate Hills" style= "width: 400px; height: 400px">
            <p>A breathtaking natural wonder, consisting of hundreds of perfectly conical limestone mounds that stretch as far as the eye can see.</p>
            <img src="{{ asset('images/mt. fuji.jpg') }}" alt="Mt. Fuji" style= "width: 400px; height: 400px">
            <p>Mount Fuji, Japan’s iconic and sacred peak, rises majestically above the surrounding landscape, its snow-capped summit visible from miles away.</p>
            <img src="{{ asset('images/japan landscapes.jpg') }}" alt="Japan Landscapes" style= "width: 400px; height: 400px">
            <p>Revered for centuries in art, literature, and spiritual tradition, it symbolizes beauty, endurance, and harmony with nature.</p>
            <img src="{{ asset('images/niagara falls canada.jpg') }}" alt="Niagara Falls Canada" style= "width: 400px; height: 400px">
            <p>The thundering cascades of water plunge with immense power, creating misty rainbows that dance above the gorge.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/stanley park canada.jpg') }}" alt="Stanley Park Canada" style= "width: 400px; height: 400px">
            <p>A breathtaking blend of lush forests, scenic shorelines, and vibrant wildlife. Encompassing more than 1,000 acres, it offers visitors winding trails, towering cedar and hemlock trees, and panoramic views of mountains, ocean, and cityscape.</p>
            <img src="{{ asset('images/banff gondola.jpg') }}" alt="Banff Gondola" style= "width: 400px; height: 400px">
            <p>Breathtaking alpine experiences, lifting visitors high above the sweeping vistas of Banff National Park.</p>
            <img src="{{ asset('images/zermatt.jpg') }}" alt="Zermatt Switzerland" style= "width: 400px; height: 400px">
            <p>Zermatt, nestled at the foot of the world-famous Matterhorn, is a charming Swiss alpine village that blends natural beauty with timeless mountain culture.</p>
            <img src="{{ asset('images/lugano.jpg') }}" alt="Lugano" style= "width: 400px; height: 400px">
            <p>Lugano, set along the shimmering shores of Lake Lugano in southern Switzerland, is a graceful blend of Swiss elegance and Mediterranean charm. Surrounded by rolling hills and majestic mountains, the city offers a serene atmosphere where palm-lined promenades, and vibrant cultural landmarks come together.</p>
            <img src="{{ asset('images/nile river.jpg') }}" alt="Nile River" style= "width: 400px; height: 400px">
            <p>Lows with a history as deep and enduring as civilization itself. Stretching thousands of kilometers across deserts, valleys, it has nurtured ancient kingdoms, sustained thriving cultures, and shaped the landscapes of Egypt and beyond.</p>
            <img src="{{ asset('images/grand canyon.jpg') }}" alt="Grand Canyon" style= "width: 400px; height: 400px">
            <p>Carved over millions of years by the powerful Colorado River, is one of the world’s most awe-inspiring natural wonders. Its immense scale—stretching for miles with cliffs that plunge dramatically into deep, winding gorges—reveals layers of ancient rock that tell the story of Earth geological past.</p>
            <img src="{{ asset('images/mount everest.jpg') }}" alt="Mount Everest" style= "width: 400px; height: 400px">
            <p>Towering at the edge of the Himalayas, stands as the highest point on Earth—a monumental peak that has captured the imagination of explorers, climbers, and dreamers for generations.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/sahara desert.jpg') }}" alt="Sahara Desert" style= "width: 400px; height: 400px">
            <p>Stretching across the vast expanse of North Africa, is the largest hot desert in the world and a landscape of extraordinary extremes.</p>
            <img src="{{ asset('images/swiss alps.jpg') }}" alt="Swiss Alps" style= "width: 400px; height: 400px">
            <p>One of the most breathtaking mountain ranges in the world, rise in dramatic peaks and sweeping valleys that define Switzerland’s iconic landscape. Blanketed in snow much of the year, these majestic mountains offer pristine glaciers, crystal-clear lakes, and lush alpine meadows dotted with charming wooden chalets.</p>
            <img src="{{ asset('images/victoria falls.jpg') }}" alt="Victoria Falls" style= "width: 400px; height: 400px">
            <p>Known locally as “Mosi-oa-Tunya” or “The Smoke That Thunders,” its roaring cascade sends a misty spray into the air, creating breathtaking rainbows and a sense of awe for all who witness it.</p>
            <img src="{{ asset('images/pamukkale turkey.jpg') }}" alt="Pamukkale Turkey" style= "width: 400px; height: 400px">
            <p>A surreal natural wonder in southwestern Turkey, famous for its terraces of gleaming white travertine formed by mineral-rich hot springs.</p>
            <img src="{{ asset('images/cliffs of moher.jpg') }}" alt="Cliffs of Moher" style= "width: 400px; height: 400px">
            <p>Stretching for over 8 kilometers and soaring up to 214 meters above the ocean, the cliffs offer breathtaking panoramas of rolling waves, seabird colonies, and the distant Aran Islands. Windswept and majestic, they evoke a sense of raw power and timeless beauty, where nature’s forces have sculpted a landscape of striking contrasts.</p>
            <img src="{{ asset('images/halong bay.jpg') }}" alt="Halong Bay Vietnam" style= "width: 400px; height: 400px">
            <p>is a mesmerizing seascape of emerald waters dotted with thousands of limestone karsts and islets rising dramatically from the sea.</p>

        </div>
    </main>

    <footer>
         <p>© 2025 My Photo Album. All rights reserved.</p>
    </footer>
</body>
</html>