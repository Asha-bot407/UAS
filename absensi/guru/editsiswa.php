<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

$id = $_GET['id'];

$dataSiswa = tampilSiswaById($id);

$dataKelas = tampilKelas();

if(isset($_POST['editSiswa'])){

    $hasil = updateSiswa($_POST);

    if($hasil > 0){

    echo "
    <script>
    alert('Berhasil diubah');
    document.location.href='siswa.php';
    </script>";

    }else if($hasil == -1){

        echo "
        <script>
        alert('NIS sudah digunakan');
        </script>";

    }else{

        echo "
        <script>
        alert('Tidak ada perubahan');
        </script>";

    }

}

include "template/header.php";
include "template/navbar.php";
?>

<div class="container mt-4">

    <div class="card shadow border-0">

        <div class="card-body">

            <h3 class="fw-bold mb-4">
            Edit Siswa
            </h3>

            <form action="" method="POST">

                <input type="hidden"
                name="idSiswa"
                value="<?= $dataSiswa['idSiswa']; ?>">

                <div class="mb-3">

                    <label class="form-label">
                    NIS
                    </label>

                    <input type="text"
                    name="nis"
                    class="form-control"
                    value="<?= $dataSiswa['nis']; ?>">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                    Nama Siswa
                    </label>

                    <input type="text"
                    name="namaSiswa"
                    class="form-control"
                    value="<?= $dataSiswa['namaSiswa']; ?>">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                    Kelas
                    </label>

                    <select name="idKelas"
                    class="form-select">

                        <?php foreach($dataKelas as $kelas): ?>

                        <option 
                        value="<?= $kelas['idKelas']; ?>"
                            <?= ($kelas['idKelas'] == $dataSiswa['idKelas']) ? "selected" : ""; ?>
                            >

                            <?= $kelas['namaKelas']; ?>

                        </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <button type="submit"
                name="editSiswa"
                class="btn btn-warning rounded-pill">
                Update
                </button>

                <a href="siswa.php"
                class="btn btn-secondary rounded-pill">
                Kembali
                </a>

            </form>

        </div>

    </div>

</div>

<?php include "template/footer.php"; ?>