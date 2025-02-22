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
                <a href="{{ route('sumbar') }}"><div class="back-button">&larr;</div></a>
                <h2>Kota Padang</h2>
                <div class="grid">
                    <a href="#"><button class="button">Kecamatan Padang Barat</button></a>
                    <a href="#"><button class="button">Kecamatan Padang Timur</button></a>
                    <a href="#"><button class="button">Kecamatan Padang Selatan</button></a>
                    <a href="#"><button class="button">Kecamatan Padang Utara</button></a>
                    <a href="#"><button class="button">Kecamatan Koto Tangah</button></a>
                    <a href="#"><button class="button">Kecamatan Nanggalo</button></a>
                    <a href="#"><button class="button">Kecamatan Lubuk Begalung</button></a>
                    <a href="#"><button class="button">Kecamatan Bungus Teluk Kabung</button></a>
                </div>
                <div class="profile">
                    <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
                </div>
            </div>
        
            <script src={{ asset('js/lokasi.js') }}></script>
        </body>
        </html>
