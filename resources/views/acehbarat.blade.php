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
        <a href="{{ route('lokasiaceh') }}"><div class="back-button">&larr;</div></a>
                <h2>kabupaten aceh barat</h2>
                <div class="grid">
                    <a href="{{ route('aronganlembadek') }}"><button class="button">arongan lembadek</button></a>
                    <a href="{{ route('bubon') }}"><button class="button">bubon</button></a>
                    <a href="{{ route('johanpahlawan') }}"><button class="button">johan pahlawan</button></a>
                    <a href="{{ route('kawayXVI') }}"><button class="button">kaway XVI</button></a>
                    <a href="{{ route('meureubo') }}"><button class="button">meureubo</button></a>
                    <a href="{{ route('panteceureumen') }}"><button class="button">pante ceureumen</button></a>
                    <a href="{{ route('pantonreu') }}"><button class="button">panton reu</button></a>
                    <a href="{{ route('samatiga') }}"><button class="button">samatiga</button></a>
                    <a href="{{ route('sungaimas') }}"><button class="button">sungai mas</button></a>
                    <a href="{{ route('woyla') }}"><button class="button">woyla</button></a>
                </div>
        <div class="profile">
            <a href={{ asset('profile.icon')}}><i class="fa-regular fa-user"></i>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>