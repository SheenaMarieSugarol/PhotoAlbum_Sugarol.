<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Photo Album</title>
    <link rel="icon" type="image/png" href="{{ asset('laravel-logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: 'Playfair Display', sans-serif;
            background-color: #c1ba57f2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #948a2df2;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 3em;
            color: #080808ff;
        } 
        header h2 {
            font-family: 'Lora';
            font-size: 1em;
            padding: 5px;
            color: #080808ff;
        } 
        nav {
            text-align: center;
            margin: 40px 0;
        }
        nav a {
            text-decoration: none;
            color: #080808ff;
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
            background-color: #c8df83f2;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
            text-align: center;
            color: #080808ff;
        }
        .image-box img {
            border-radius: 8px;
        }
        footer {
            margin-top: 20px;
            padding: 40px;
            background-color: #948a2df2;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Beaches</h1>
        <h2>Where golden sands meet endless horizons, capturing the sun, surf, and serenity of the world’s most breathtaking shores. Check out this views!</h2>
    </header>

    <nav>
        <a href="{{ url('home') }}">Home</a>
        <a href="{{ url('page1') }}">Architectural Infrastructures</a>
        <a href="{{ url('page2') }}">Cafes</a>
        <a href="{{ url('page3') }}">Museums</a>
        <a href="{{ url('page4') }}">Landscapes</a>
    </nav>

    <main class="image-grid">
        <div class="image-box">
            <img src="{{ asset('images/boracay island.jpg') }}" alt="Boracay Island" style= "width: 400px; height: 400px">
            <p>Famous for its powdery white sand and crystal-clear waters, White Beach is perfect for sunbathing, water sports, and vibrant nightlife.</p>
            <img src="{{ asset('images/el nido palawan.jpg') }}" alt="El Nido Palawan" style= "width: 400px; height: 400px">
            <p>A tropical paradise of dramatic limestone cliffs, hidden lagoons, and secluded white sand beaches. Ideal for island hopping, snorkeling, and enjoying untouched natural beauty.</p>
            <img src="{{ asset('images/nacpan beach.jpg') }}" alt="Nacpan Beach" style= "width: 400px; height: 400px">
            <p>Serene 4-kilometer stretch of golden sand, Nacpan Beach is perfect for peaceful walks and watching stunning sunsets away from the crowds.</p>
            <img src="{{ asset('images/panglao island.jpg') }}" alt="Panglao Island" style= "width: 400px; height: 400px">
            <p>Panglao Island offers pristine white sand beaches and vibrant coral reefs. It’s a hotspot for diving, snorkeling, and relaxing under swaying coconut trees.</p>
            <img src="{{ asset('images/siargao island.jpg') }}" alt="Siargao Island" style= "width: 400px; height: 400px">
            <p>Known as the surfing capital of the Philippines, Siargao features powdery beaches, crystal-clear waters, and natural pools like the famous Sugba Lagoon.</p>
            <img src="{{ asset('images/calaguas island.jpg') }}" alt="Calaguas Island" style= "width: 400px; height: 400px">
            <p>Remote and untouched, Calaguas Islands boast soft white sand, turquoise waters, and a tranquil environment, perfect for camping and escaping city life.</p>
            <img src="{{ asset('images/hundred island.jpg') }}" alt="Hundred Island" style= "width: 400px; height: 400px">
            <p>A group of 124 islands offering sandy shores, clear waters, and numerous coves. Great for island hopping, snorkeling, and scenic viewpoints.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/malapascua island.jpg') }}" alt="Malapascua Island" style= "width: 400px; height: 400px">
            <p>Famous for its diving spots, especially thresher sharks, Malapascua also has calm beaches with powdery sand and crystal waters for swimming and relaxing.</p>
            <img src="{{ asset('images/pagudpud beach.jpg') }}" alt="Pagudpud Beach" style= "width: 400px; height: 400px">
            <p>A northern paradise featuring long stretches of white sand beaches, dramatic coastal views, and famous spots like Saud Beach and Blue Lagoon, perfect for windsurfing and photography.</p>
            <img src="{{ asset('images/camiguin island.jpg') }}" alt="Camiguin Island" style= "width: 400px; height: 400px">
            <p>Known as the “Island Born of Fire,” Camiguin has volcanic landscapes paired with black sand beaches, pristine waters, and attractions like White Island sandbar and Mantigue Island.</p>
            <img src="{{ asset('images/baler beach aurora.jpg') }}" alt="Tali Beach in Aurora" style= "width: 400px; height: 400px">
            <p>Known for its surf-friendly waves and laid-back vibe, Tali Beach is ideal for beginners and seasoned surfers alike. The gentle shores and friendly local surf schools make it a perfect escape for adventure seekers.</p>
            <img src="{{ asset('images/patar beach.jpg') }}" alt="Patar Beach" style= "width: 400px; height: 400px">
            <p>A wide stretch of golden sand with calm waters, perfect for swimming, sunset watching, and beach picnics. Its serene atmosphere makes it an ideal spot to unwind and reconnect with nature.</p>
            <img src="{{ asset('images/sabang beach.jpg') }}" alt="Sabang Beach" style= "width: 400px; height: 400px">
            <p>Famous as the gateway to the Puerto Princesa Underground River, Sabang Beach also has calm waters and lush surroundings. Visitors can enjoy boat tours, nature walks, and a tranquil seaside escape.</p>
            <img src="{{ asset('images/tambobong white beach.jpg') }}" alt="Tambobong White Beach" style= "width: 400px; height: 400px">
            <p>A peaceful and quiet beach with fine sand and clear waters, ideal for camping and small gatherings. Its untouched charm offers a relaxing retreat far from the crowds.</p>

        </div>
        <div class="image-box">
            <img src="{{ asset('images/bantayan island.jpg') }}" alt="Bantayn Island" style= "width: 400px; height: 400px">
            <p>A hidden gem with powdery white sand, calm turquoise waters, and a relaxed, small-town vibe perfect for unwinding. The island’s tranquil pace and scenic views offer a peaceful getaway from city life.</p>
            <img src="{{ asset('images/bagasbas beach.jpeg') }}" alt="Bagasbas Beach" style= "width: 400px; height: 400px">
            <p>Known for its long coastline and surfing waves, Bagasbas Beach is popular with local surfers and beachgoers. Its expansive sands also make it ideal for beach sports and casual seaside picnics.</p>
            <img src="{{ asset('images/naked island.jpg') }}" alt="Naked Island" style= "width: 400px; height: 400px">
            <p>A unique sandbar with no trees or buildings, surrounded by turquoise waters. It’s a perfect spot for sunbathing, photography, and enjoying the open sea.</p>
            <img src="{{ asset('images/masasa beach.jpg') }}" alt="Masasa Beach" style= "width: 400px; height: 400px">
            <p>A quiet beach with clear waters, perfect for swimming, snorkeling, and enjoying scenic sunsets. Its pristine shores and gentle waves make it a favorite for romantic escapes and nature lovers.</p>
            <img src="{{ asset('images/alona beach.jpg') }}" alt="Alona Beach" style= "width: 400px; height: 400px">
            <p>Bustling and vibrant, Alona Beach offers white sand, crystal-clear waters, and lively restaurants and nightlife. The beach comes alive at sunset, making it a favorite for social gatherings and evening strolls.</p>
            <img src="{{ asset('images/aninuan beach.jpg') }}" alt="Aninuan Beach" style= "width: 400px; height: 400px">
            <p>A quieter alternative to White Beach, Aninuan offers soft sands, calm waters, and a peaceful environment ideal for relaxation and swimming.</p>

        </div>
    </main>

    <footer>
         <p>© 2025 My Photo Album. All rights reserved.</p>
    </footer>
</body>
</html>