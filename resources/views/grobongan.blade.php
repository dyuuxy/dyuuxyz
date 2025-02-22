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
        <h2>Kota Grobogan</h2>
        <div class="grid">
            <a href="#"><button class="button">Grobogan</button></a>
            <a href="#"><button class="button">Banyuputih</button></a>
            <a href="#"><button class="button">Brati</button></a>
            <a href="#"><button class="button">Gubug</button></a>
            <a href="#"><button class="button">Karangrayung</button></a>
            <a href="#"><button class="button">Kedungjati</button></a>
            <a href="#"><button class="button">Klambu</button></a>
            <a href="#"><button class="button">Penawangan</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
