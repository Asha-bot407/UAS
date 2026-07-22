<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

$dataAbsensi = tampilAbsensi();

include "template/header.php";
include "template/navbar.php";
?>

<div class="container mt-4">

    <div class="card shadow border-0">

        <div class="card-body">

            <h3 class="fw-bold mb-4">
            Rekap Absensi Siswa
            </h3>

            <div class="table-responsive">

                <table class="table table-striped table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Guru</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <?php $no = 1; ?>
                    <?php foreach($dataAbsensi as $absen): ?>
                    <tr>
                        <td>
                        <?= $no++; ?>
                        </td>
                        <td>
                        <?= $absen['nis']; ?>
                        </td>
                        <td>
                        <?= $absen['namaSiswa']; ?>
                        </td>
                        <td>
                        <?= $absen['namaKelas']; ?>
                        </td>
                        <td>
                        <?= $absen['namaMapel']; ?>
                        </td>
                        <td>
                        <?= $absen['namaGuru']; ?>
                        </td>
                        <td>
                        <?= $absen['tanggal']; ?>
                        </td>
                        <td>
                        <?php if($absen['status']=="Masuk"): ?>

                        <span class="badge bg-success">
                        <?= $absen['status']; ?>
                        </span>

                        <?php elseif($absen['status']=="Izin"): ?>

                        <span class="badge bg-warning text-dark">
                        <?= $absen['status']; ?>
                        </span>

                        <?php elseif($absen['status']=="Sakit"): ?>

                        <span class="badge bg-info">
                        <?= $absen['status']; ?>
                        </span>

                        <?php else: ?>

                        <span class="badge bg-danger">
                        <?= $absen['status']; ?>
                        </span>

                        <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>

            </div>

        </div>

    </div>
</div>

<?php include "template/footer.php"; ?>