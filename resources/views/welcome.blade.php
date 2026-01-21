<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio | Ricky Susanto</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    *{margin:0;padding:0;box-sizing:border-box}
    body{font-family:'Poppins',sans-serif;background:#0b1220;color:#e5e7eb}
    a{text-decoration:none;color:inherit}

    /* LAYOUT */
    .container{display:grid;grid-template-columns:260px 1fr;min-height:100vh}

    /* SIDEBAR */
    aside{background:#020617;padding:30px;position:fixed;width:260px;height:100vh}
    aside h2{color:#38bdf8;margin-bottom:30px}
    aside nav a{display:block;margin-bottom:15px;color:#cbd5f5}
    aside nav a:hover{color:#38bdf8}

    /* CONTENT */
    main{margin-left:260px;padding:60px}

    section{margin-bottom:80px}
    h1,h2{margin-bottom:20px}

    /* HERO */
    .hero{display:flex;gap:40px;align-items:center}
    .hero img{width:180px;height:180px;border-radius:20px;object-fit:cover;border:3px solid #38bdf8}
    .hero span{color:#38bdf8}

    /* CARDS */
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px}
    .card{background:#020617;padding:25px;border-radius:16px}

    /* SKILL BAR */
    .skill{margin-bottom:15px}
    .bar{background:#1e293b;border-radius:10px;overflow:hidden}
    .bar div{background:#38bdf8;height:10px}

    footer{text-align:center;color:#94a3b8;margin-top:80px}

    /* RESPONSIVE */
    @media(max-width:900px){
      .container{grid-template-columns:1fr}
      aside{position:relative;width:100%;height:auto}
      main{margin-left:0;padding:40px}
      .hero{flex-direction:column;text-align:center}
    }
  </style>
</head>
<body>

<div class="container">

  <!-- SIDEBAR -->
  <aside>
    <h2>Ricky</h2>
    <nav>
      <a href="#home">🏠 Home</a>
      <a href="#about">👤 About</a>
      <a href="#skills">🛠 Skills</a>
      <a href="#projects">📁 Projects</a>
      <a href="#contact">✉ Contact</a>
    </nav>
  </aside>

  <!-- CONTENT -->
  <main>

    <section id="home" class="hero">
      <img src="images/suki.jpeg" alt="Foto Profil">
      <div>
        <h1>Halo, saya <span>Ricky Susanto</span></h1>
        <p>Web Developer • Laravel • PHP • MySQL</p>
      </div>
    </section>

    <section id="about">
      <h2>Tentang Saya</h2>
      <p>Saya adalah web developer yang fokus membangun aplikasi web modern menggunakan Laravel. Terbiasa membuat sistem login, CRUD, dan aplikasi sekolah.</p>
    </section>

    <section id="skills">
      <h2>Skills</h2>
      <div class="skill">HTML & CSS
        <div class="bar"><div style="width:90%"></div></div>
      </div>
      <div class="skill">Laravel
        <div class="bar"><div style="width:85%"></div></div>
      </div>
      <div class="skill">JavaScript
        <div class="bar"><div style="width:70%"></div></div>
      </div>
    </section>

    <section id="projects">
      <h2>Projects</h2>
      <div class="grid">
        <div class="card">
          <h3>Aplikasi Absensi</h3>
          <p>Laravel + MySQL</p>
        </div>
        <div class="card">
          <h3>Website Sekolah</h3>
          <p>Company Profile & Admin</p>
        </div>
      </div>
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <p>Email: ricky@email.com</p>
      <p>WhatsApp: 085252829756</p>
    </section>

    <footer>© 2026 Ricky Susanto</footer>
  </main>

</div>

</body>
</html>
