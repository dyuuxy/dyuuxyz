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
        <a href="{{ route('lokasi') }}"><div class="back-button">&larr;</div></a>
                <h2>kabupaten blitar</h2>
                <div class="grid">
                    <a href="#"><button class="button">Bendo</button></a>
                    <a href="#"><button class="button">Kauman</button></a>
                    <a href="{{ route('job') }}"><button class="button">Kepanjenkidol</button></a>
                    <a href="#"><button class="button">Kepanjenlor</button></a>
                    <a href="#"><button class="button">Ngadirejo</button></a>
                    <a href="#"><button class="button">Sentul</button></a>
                    <a href="#"><button class="button">Tanggung</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>