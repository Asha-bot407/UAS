<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}


require "../fungsi.php";


$idKelas = $_POST['idKelas'];
$idMapel = $_POST['idMapel'];


$dataSiswa = tampilSiswaByKelas($idKelas);

include "template/header.php";
include "template/navbar.php";
?>


<div class="container mt-4">

    <div class="card shadow border-0">

        <div class="card-body">

            <h3 class="fw-bold mb-4">
            Input Absensi Siswa
            </h3>

            <form action="simpanabsensi.php" method="POST">

                <input type="hidden" name="idKelas" value="<?= $idKelas; ?>">
                <input type="hidden" name="idMapel" value="<?= $idMapel; ?>">
                <table class="table table-striped table-hover align-middle">

                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <?php $no=1; ?>

                    <?php foreach($dataSiswa as $siswa): ?>

                    <tr>

                        <td>
                        <?= $no++; ?>
                        </td>
                        <td>
                        <?= $siswa['nis']; ?>
                        </td>
                        <td>
                        <?= $siswa['namaSiswa']; ?>
                        </td>
                        <td>

                        <select 
                        name="status[<?= $siswa['idSiswa']; ?>]"
                        class="form-select">
                                <option value="Masuk">
                                    Masuk
                                </option>
                                <option value="Izin">
                                    Izin
                                </option>
                                <option value="Sakit">
                                    Sakit
                                </option>
                                <option value="Alpa">
                                    Alpa
                                </option>
                        </select>

                        </td>

                    </tr>

                    <?php endforeach; ?>

                </table>

                <br>

                <button 
                name="simpan"
                class="btn btn-primary rounded-pill">
                Simpan Absensi
                </button>

            </form>

        </div>

    </div>

</div>

<?php include "template/footer.php"; ?>