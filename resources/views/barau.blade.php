<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Daerah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href={{ asset('css/lokasi.css') }}>
</head>
<body>
    <div class="container">
        <a href="{{ route('kaltim') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Barito Utara (Barau)</h2>
        <div class="grid">
            <a href="#"><button class="button"> Teweh Selatan</button></a>
            <a href="#"><button class="button"> Teweh Tengah</button></a>
            <a href="#"><button class="button"> Teweh Timur</button></a>
            <a href="#"><button class="button"> Lahei</button></a>
            <a href="#"><button class="button"> Lahei Barat</button></a>
            <a href="#"><button class="button"> Gunung Timang</button></a>
            <a href="#"><button class="button"> Montallat</button></a>
            <a href="#"><button class="button"> Montalat Selatan</button></a>
            <a href="#"><button class="button"> Barito Utara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
