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
        <a href="{{ route('jawatengah') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Sragen</h2>
        <div class="grid">
            <a href="#"><button class="button">Sragen</button></a>
            <a href="#"><button class="button">Gondang</button></a>
            <a href="#"><button class="button">Sidoharjo</button></a>
            <a href="#"><button class="button">Tangen</button></a>
            <a href="#"><button class="button">Sambirejo</button></a>
            <a href="#"><button class="button">Gemolong</button></a>
            <a href="#"><button class="button">Plupuh</button></a>
            <a href="#"><button class="button">Masaran</button></a>
            <a href="#"><button class="button">Sukodono</button></a>
            <a href="#"><button class="button">Tanon</button></a>
            <a href="#"><button class="button">Karangmalang</button></a>
            <a href="#"><button class="button">Miri</button></a>
            <a href="#"><button class="button">Kalijambe</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
