<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portfolio | Ricky </title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

</head>
<body>

<div class="container">
    <div class="profile-card">

        <img src="{{ asset('images/suki.jpeg') }}" alt="Foto Profil" class="profile-img">

        <h1>Ricky S</h1>
        <h3>Siswa SMK | Web Developer</h3>

        <p>
            Halo! Saya adalah siswa SMK yang sedang belajar
            pengembangan website menggunakan Laravel.
            Saya tertarik pada pembuatan website modern dan dinamis.
        </p>

        <div class="buttons">
            <a href="/login" class="btn login">🔐 Login Dashboard</a>
            <a href="#project" class="btn project">📂 Lihat Project</a>
        </div>

    </div>
</div>

</body>
</html>
