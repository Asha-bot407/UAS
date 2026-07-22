<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

$dataMapel = tampilMapel();

include "template/header.php";
include "template/navbar.php";
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2 class="fw-bold">
        Data Mata Pelajaran
        </h2>
        <a href="tambahmapel.php" class="btn btn-primary rounded-pill">
        + Tambah Mapel
        </a>

    </div>

    <?php
    $no = 1;
    ?>

    <table class="table table-striped table-hover shadow">

        <thead class="table-primary">

            <tr>
            <th>No</th>
            <th>Nama Mapel</th>
            <th>Aksi</th>
            </tr>

        </thead>

        <?php foreach($dataMapel as $Mapel): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $Mapel['namaMapel']; ?></td>
            <td>
                <a href="editmapel.php?id=<?= $Mapel['idMapel']; ?>"
                class="btn btn-warning btn-sm">
                Edit
                </a>

                <a href="hapusmapel.php?id=<?= $Mapel['idMapel']; ?>"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin ingin menghapus Mapel ini?')">
                Hapus
                </a>
            </td>
        </tr>

        <?php endforeach; ?>

    </table>

</div>

<?php include "template/footer.php"; ?>