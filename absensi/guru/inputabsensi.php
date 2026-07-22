<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";


$dataKelas = tampilKelas();
$dataMapel = tampilMapel();

include "template/header.php";
include "template/navbar.php";
?>

<div class="container mt-4">

    <div class="card shadow border-0">

        <div class="card-body">

            <h3 class="fw-bold mb-4">
            Input Absensi
            </h3>

            <form action="absensi.php" method="POST">

                <div class="mb-3">

                    <label class="form-label">
                    Kelas
                    </label>

                    <select name="idKelas"
                    class="form-select">

                        <?php foreach($dataKelas as $kelas): ?>

                        <option value="<?= $kelas['idKelas']; ?>">
                        <?= $kelas['namaKelas']; ?>
                        </option>

                        <?php endforeach; ?>
                    </select>

                </div>

                <br><br>

                <div class="mb-3">

                    <label class="form-label">
                    Mata Pelajaran
                    </label>

                    <select name="idMapel"
                    class="form-select">

                        <?php foreach($dataMapel as $mapel): ?>

                        <option value="<?= $mapel['idMapel']; ?>">
                        <?= $mapel['namaMapel']; ?>
                        </option>

                        <?php endforeach; ?>
                    </select>

                </div>

                <br><br>

                <button 
                name="mulaiAbsensi"
                class="btn btn-primary rounded-pill">
                Mulai Absensi
                </button>

            </form>

        </div>

    </div>

</div>

<?php include "template/footer.php"; ?>