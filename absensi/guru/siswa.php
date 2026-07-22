<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

$dataSiswa = tampilSiswa();

include "template/header.php";
include "template/navbar.php";
?>


    <?php
    $no = 1;
    ?>

<div class="container mt-4">


    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2 class="fw-bold">
        Data Siswa
        </h2>

        <a href="tambahsiswa.php" class="btn btn-primary rounded-pill">
        +
        Tambah Siswa
        </a>

    </div>

    <table class="table table-striped table-hover shadow">

        
            <thead class="table-primary">

                <tr>

                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Aksi</th>

                </tr>

            </thead>
        

        <?php foreach($dataSiswa as $siswa): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $siswa['nis']; ?></td>
            <td><?= $siswa['namaSiswa']; ?></td>
            <td><?= $siswa['namaKelas']; ?></td>
            <td>
                <a href="editsiswa.php?id=<?= $siswa['idSiswa']; ?>"
            class="btn btn-warning btn-sm">
            Edit
            </a>

            <a href="hapussiswa.php?id=<?= $siswa['idSiswa']; ?>"
            class="btn btn-danger btn-sm"
            onclick="return confirm('Yakin ingin menghapus Siswa ini?')">
            Hapus
            </a>
            </td>
        </tr>

        <?php endforeach; ?>
    
    </table>
</div>

<?php include "template/footer.php"; ?>