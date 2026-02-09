<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portofolio | Ricky S</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 40px 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .card {
            background: #1e293b;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,.3);
            transition: transform .3s;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-body h3 {
            margin: 0 0 10px;
        }

        .card-body p {
            font-size: 14px;
            color: #cbd5e1;
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 14px;
            background: #38bdf8;
            color: #000;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>📂 Portofolio Project Saya</h1>

    <div class="projects">
        @foreach ($projects as $project)
        <div class="card">
            <img src="{{ asset('images/' . $project->gambar) }}" alt="{{ $project->title }}">
            <div class="card-body">
                <h3>{{ $project->judul }}</h3>
                <p>{{ $project->deskripsi }}</p>
                <a href="#" class="btn">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

</body>
</html>
