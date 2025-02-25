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
        <a href="{{ route('maluku') }}"><div class="back-button">&larr;</div></a>   
        <h2>Kabupaten Maluku Tengah</h2>
        <div class="grid">
            <a href="#"><button class="button"> Salahutu</button></a>
            <a href="#"><button class="button"> Leihitu</button></a>
            <a href="#"><button class="button"> Leihitu Barat</button></a>
            <a href="#"><button class="button"> Tulehu</button></a>
            <a href="#"><button class="button"> Saparua</button></a>
            <a href="#"><button class="button"> Saparua Timur</button></a>
            <a href="#"><button class="button"> Haruku</button></a>
            <a href="#"><button class="button"> Tehoru</button></a>
            <a href="#"><button class="button"> Seram Utara</button></a>
            <a href="#"><button class="button"> Seram Utara Barat</button></a>
            <a href="#"><button class="button"> Kairatu</button></a>
            <a href="#"><button class="button"> Kairatu Barat</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
