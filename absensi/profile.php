<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio 2.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            PORTOFOLIO 2.0
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#hero">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#skills">
                        Skills
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#projects">
                        Projects
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>


<section id="hero" class="container py-5">

    <div class="row align-items-center">

        <div class="col-md-6 text-center text-md-start">
            <h1>Hi, Saya MUHAMMAD ASSON HAJI</h1>

            <p>
                Mahasiswa Pendidikan Informatika
                yang sedang belajar Web Development.
            </p>

            <a href="#contact">
              <button class="btn btn-success">
                Contact Me
              </button>
              </a>
        </div>

        <div class="col-md-6 text-center mt-4 mt-md-0">
            <img src="img/profile.jpg"
                 class="img-fluid rounded-circle"
                 width="250">
        </div>

    </div>

</section>

<section id="about" class="container py-5">
  <div class="text-center text-md-start">
    <h2>Tentang Saya</h2>

    <p>
        Saya mahasiswa Pendidikan Informatika
        yang tertarik pada pengembangan web,
        pemrograman, dan game development.
    </p>
  </div>
</section>

<section id="skills" class="container py-5">

    <div class="text-center mb-5">
        <h2>My Skills</h2>
        <p>Bidang yang saya minati dan pelajari</p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 skill-card">
                <div class="card-body text-center">
                    <h3>🌐</h3>
                    <h4>Web Development</h4>
                    <p>
                        Mempelajari pengembangan website menggunakan
                        HTML, CSS, Bootstrap, PHP, dan MySQL.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 skill-card">
                <div class="card-body text-center">
                    <h3>🎨</h3>
                    <h4>Graphic Design</h4>
                    <p>
                        Membuat desain poster, banner, konten media sosial,
                        dan berbagai kebutuhan visual.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 skill-card">
                <div class="card-body text-center">
                    <h3>🎮</h3>
                    <h4>Game Development</h4>
                    <p>
                        Tertarik mempelajari pembuatan game,
                        desain gameplay, dan pengembangan proyek game.
                    </p>
                </div>
            </div>
        </div>

    </div>

</section>

<section id="projects" class="container py-5">

    <div class="text-center mb-5">
        <h2>Projects</h2>
        <p>Proyek dan karya yang pernah saya kerjakan</p>
    </div>

    <div class="row g-4">

        <!-- Portfolio -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 skill-card">
                <div class="card-body text-center">
                    <h3>🌐</h3>
                    <h4>Portfolio Website</h4>

                    <p>
                        Website portofolio pribadi yang dibuat
                        menggunakan HTML, CSS, Bootstrap, dan PHP.
                    </p>

                    <span class="badge bg-success">HTML</span>
                    <span class="badge bg-success">Bootstrap</span>
                    <span class="badge bg-success">PHP</span>

                </div>
            </div>
        </div>

        <!-- Absensi -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 skill-card">
                <div class="card-body text-center">
                    <h3>📋</h3>
                    <h4>Student Attendance System</h4>

                    <p>
                        Perancangan sistem absensi siswa berbasis web
                        untuk membantu pengelolaan kehadiran di sekolah.
                    </p>

                    <span class="badge bg-warning text-dark">
                        On Progress
                    </span>

                    <br>

                    <a href="index.php"
                    class="btn btn-primary btn-sm mt-3"
                    target="_blank">
                    <i class="bi bi-box-arrow-up-right"></i>
                    Demo Project
                    </a>
                </div>
            </div>
        </div>

        <!-- Design -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 skill-card">
                <div class="card-body text-center">
                    <h3>🎨</h3>
                    <h4>Graphic Design Collection</h4>

                    <p>
                        Kumpulan desain poster, banner,
                        dan konten visual yang dibuat
                        untuk berbagai kebutuhan.
                    </p>

                    <span class="badge bg-info text-dark">
                        Design
                    </span>

                </div>
            </div>
        </div>

        <!-- Game -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 skill-card">
                <div class="card-body text-center">
                    <h3>🎮</h3>
                    <h4>Game Development Journey</h4>

                    <p>
                        Eksplorasi pengembangan game sederhana
                        untuk mempelajari gameplay dan logika game.
                    </p>

                    <span class="badge bg-secondary">
                        Learning
                    </span>

                </div>
            </div>
        </div>

    </div>

</section>

<section id="contact" class="container py-5">

    <div class="text-center mb-5">
        <h2>Contact Me</h2>
        <p>
            Mari terhubung dan berdiskusi bersama.
        </p>
    </div>

    <div class="row justify-content-center g-4">

        <div class="col-md-3">

            <div class="card h-100 skill-card">

                <div class="card-body text-center">

                    <i class="bi bi-envelope-fill fs-1"></i>

                    <h5 class="mt-3">Email</h5>

                    <p>
                        <a href="mailto:assonhaji2310@gmail.com">
                          assonhaji2310@gmail.com
                        </a>
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card h-100 skill-card">

                <div class="card-body text-center">

                    <i class="bi bi-whatsapp fs-1"></i>

                    <h5 class="mt-3">WhatsApp</h5>

                    <p>
                        <a href="https://wa.me/6285183910159"
                          target="_blank">
                            Chat WhatsApp
                        </a>
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card h-100 skill-card">

                <div class="card-body text-center">

                    <i class="bi bi-github fs-1"></i>

                    <h5 class="mt-3">GitHub</h5>

                    <p>
                        <a href="https://github.com/Asha-bot407"
                          target="_blank">
                            Asha-bot407
                        </a>
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card h-100 skill-card">

                <div class="card-body text-center">

                    <i class="bi bi-instagram fs-1"></i>

                    <h5 class="mt-3">Instagram</h5>

                    <p>
                        <a href="https://www.instagram.com/asha_bot407"
                          target="_blank">
                            Asha
                        </a>
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<footer class="text-center py-4">

    <p>
        © 2026 Muhammad Asson Haji. <br/>
        All Rights Reserved.
    </p>

</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>