<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

include "template/header.php";
include "template/navbar.php";

$username = $_SESSION['username'];

$guru = tampilGuru($username);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<div class="container mt-4">


    <div class="card shadow">

        <div class="card-body">

            <h1 class="card-title">
            Dashboard Guru
            </h1>

            <p class="lead">
            Selamat datang,
            <b><?= $guru['namaGuru']; ?></b>
            </p>


        </div>

    </div>



    <div class="row mt-4">


        <div class="col-md-4 mb-3">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h5 class="card-title">
                    Data Kelas
                    </h5>

                    <p class="card-text">
                    Kelola data kelas siswa
                    </p>

                    <a href="kelas.php" class="btn btn-primary">
                    Buka
                    </a>

                </div>

            </div>

        </div>



        <div class="col-md-4 mb-3">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h5 class="card-title">
                    Data Mapel
                    </h5>

                    <p class="card-text">
                    Kelola mata pelajaran
                    </p>

                    <a href="mapel.php" class="btn btn-success">
                    Buka
                    </a>

                </div>

            </div>

        </div>



        <div class="col-md-4 mb-3">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h5 class="card-title">
                    Data Siswa
                    </h5>

                    <p class="card-text">
                    Kelola data siswa
                    </p>

                    <a href="siswa.php" class="btn btn-warning">
                    Buka
                    </a>

                </div>

            </div>

        </div>



        <div class="col-md-4 mb-3">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h5 class="card-title">
                    Input Absensi
                    </h5>

                    <p class="card-text">
                    Masukkan absensi siswa
                    </p>

                    <a href="inputabsensi.php" class="btn btn-danger">
                    Buka
                    </a>

                </div>

            </div>

        </div>



        <div class="col-md-4 mb-3">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h5 class="card-title">
                    Rekap Absensi
                    </h5>

                    <p class="card-text">
                    Lihat laporan absensi
                    </p>

                    <a href="rekapabsensi.php" class="btn btn-info">
                    Buka
                    </a>

                </div>

            </div>

        </div>


    </div>


</div>

<?php include "template/footer.php"; ?>