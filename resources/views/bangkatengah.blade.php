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
        <a href="{{ route('bangkabelitung') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Bangka Tengah</h2>
        <div class="grid">
            <a href="#"><button class="button">Koba</button></a>
            <a href="#"><button class="button">Mendo Barat</button></a>
            <a href="#"><button class="button">Sungai Selan</button></a>
            <a href="#"><button class="button">Pangkalanbaru</button></a>
            <a href="#"><button class="button">Namang</button></a>
            <a href="#"><button class="button">Riau Silip</button></a>
            <a href="#"><button class="button">Lubuk Besar</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
