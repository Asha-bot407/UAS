<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Absensi Sekolah</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="css/style.css">


</head>


<body>


<nav class="navbar navbar-expand-lg bg-primary navbar-dark">


<div class="container">


<a class="navbar-brand fw-bold" href="index.php">

Absensi Sekolah

</a>



<div>


<a href="login.php"
class="btn btn-light rounded-pill">

Login

</a>


<a href="buatakun.php"
class="btn btn-outline-light rounded-pill">

Buat Akun

</a>


</div>


</div>


</nav>





<section class="hero">


<div class="container">


<div class="row align-items-center">


<div class="col-md-6">


<h1 class="fw-bold">

Sistem Absensi Siswa

</h1>


<p class="text-muted fs-5">

Kelola kehadiran siswa dengan mudah,
cepat, dan terorganisir.

</p>



<a href="login.php"
class="btn btn-primary btn-lg rounded-pill">

Mulai Sekarang

</a>


</div>



<div class="col-md-6 text-center">


<div class="card shadow border-0 p-5">


<h2>
📚
</h2>


<h4>
Absensi Digital
</h4>


<p class="text-muted">

Catat kehadiran siswa tanpa menggunakan kertas.

</p>


</div>


</div>


</div>


</div>


</section>





<section class="container my-5">


<div class="row g-4">


<div class="col-md-4">


<div class="card shadow border-0 h-100">


<div class="card-body text-center">


<h3>
👨‍🏫
</h3>


<h5>
Data Guru
</h5>


<p>
Kelola akun guru dengan aman.
</p>


</div>


</div>


</div>




<div class="col-md-4">


<div class="card shadow border-0 h-100">


<div class="card-body text-center">


<h3>
👨‍🎓
</h3>


<h5>
Data Siswa
</h5>


<p>
Simpan data siswa dan kelas.
</p>


</div>


</div>


</div>





<div class="col-md-4">


<div class="card shadow border-0 h-100">


<div class="card-body text-center">


<h3>
📊
</h3>


<h5>
Rekap Absensi
</h5>


<p>
Pantau laporan kehadiran siswa.
</p>


</div>


</div>


</div>



</div>


</section>





<footer class="bg-primary text-white text-center p-3">


© <?= date('Y'); ?> Sistem Absensi Sekolah


</footer>



</body>

</html>