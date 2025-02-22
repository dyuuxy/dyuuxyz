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
        <a href="{{ route('jambi') }}"><div class="back-button">&larr;</div></a>
        <h2>Kabupaten Batanghari</h2>
        <div class="grid">
            <a href="#"><button class="button">Muara Tembesi</button></a>
            <a href="#"><button class="button">Mersam</button></a>
            <a href="#"><button class="button">Baung</button></a>
            <a href="#"><button class="button">Maro Sebo</button></a>
            <a href="#"><button class="button">Pangkalan Jambu</button></a>
            <a href="#"><button class="button">Sungai Tembesi</button></a>
            <a href="#"><button class="button">Sungai Bahar</button></a>
            <a href="#"><button class="button">Renah Mendaluh</button></a>
        </div>
        <div class="profile">
            <a href={{ asset('profile.icon') }}><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <script src={{ asset('js/lokasi.js') }}></script>
</body>
</html>
