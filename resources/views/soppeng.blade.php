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
        <a href="{{ route('sulasel') }}"><div class="back-button">&larr;</div></a>  
        <h2>Kabupaten Soppeng</h2>
        <div class="grid">
            <a href="#"><button class="button"> Marioriawa</button></a>
            <a href="#"><button class="button"> Lalabata</button></a>
            <a href="#"><button class="button"> Donri-Donri</button></a>
            <a href="#"><button class="button"> Citta</button></a>
            <a href="#"><button class="button"> Wara</button></a>
            <a href="#"><button class="button"> Liliriawa</button></a>
            <a href="#"><button class="button"> Koting</button></a>
            <a href="#"><button class="button"> Takkalala</button></a>
            <a href="#"><button class="button"> Soppeng Selatan</button></a>
            <a href="#"><button class="button"> Soppeng Utara</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
