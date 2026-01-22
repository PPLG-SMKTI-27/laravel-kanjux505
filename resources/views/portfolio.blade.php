<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portfolio | Ricky</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: white;
            margin: 0;
            padding: 0;
        }
        header {
            background: #020617;
            padding: 20px;
            text-align: center;
        }
        .container {
            padding: 40px;
        }
        .project {
            background: #1e293b;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>{{ $nama }}</h1>
    <p>{{ $deskripsi }}</p>
</header>

<div class="container">
    <h2>Project Saya</h2>

    @foreach ($projects as $project)
        <div class="project">
            <h3>{{ $project['judul'] }}</h3>
            <p>{{ $project['keterangan'] }}</p>
        </div>
    @endforeach
</div>

</body>
</html>
