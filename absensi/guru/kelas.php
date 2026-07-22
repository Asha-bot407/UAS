<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

$dataKelas = tampilKelas();

include "template/header.php";
include "template/navbar.php";
?>


<div class="container mt-4">


    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2 class="fw-bold">
        Data Kelas
        </h2>

        <a href="tambahkelas.php" class="btn btn-primary rounded-pill">
        + Tambah Kelas
        </a>

    </div>


    <?php
    $no = 1;
    ?>

    <table class="table table-striped table-hover shadow">

        <thead class="table-primary">

            <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Aksi</th>
            </tr>

        </thead>

        <?php foreach($dataKelas as $kelas): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $kelas['namaKelas']; ?></td>
            <td>
                <a href="editkelas.php?id=<?= $kelas['idKelas']; ?>"
                class="btn btn-warning btn-sm">
                Edit
                </a>

                <a href="hapuskelas.php?id=<?= $kelas['idKelas']; ?>"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin ingin menghapus kelas ini?')">
                Hapus
                </a>
            </td>
        </tr>

        <?php endforeach; ?>

    </table>

</div>

<?php include "template/footer.php"; ?>