<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

if(isset($_POST['addSiswa'])){

    if(empty($_POST['namaSiswa']) || empty($_POST['nis']) || empty($_POST['idKelas'])){
    echo "<script>
        alert('Nama Siswa harus diisi');
    </script>";
}else{

    $hasil = tambahSiswa($_POST);

    if($hasil > 0){
        echo "<script>
            alert('Berhasil');
            document.location.href='siswa.php';
        </script>";
    }else if($hasil == -1){
        echo "<script>
            alert('NIS Sudah Ada')
        </script>";
    }else{
        echo "<script>
            alert('Gagal')
        </script>";
    }

    }
}

$dataKelas = tampilKelas();

include "template/header.php";
include "template/navbar.php";
?>

<div class="container mt-4">
    <div class="card shadow border-0">
        <div class="card-body">

            <h3 class="fw-bold mb-4">
            Tambah Siswa
            </h3>

            <form action="" method="POST">
                <div class="mb-3">

                    <label class="form-label">
                    Kelas
                    </label>

                    <select name="idKelas" class="form-select">
                        <option value="">
                        -- Pilih Kelas --
                        </option>

                        <?php foreach($dataKelas as $kelas): ?>

                            <option value="<?= $kelas['idKelas']; ?>">
                            <?= $kelas['namaKelas']; ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                    NIS
                    </label>

                    <input type="text"
                    name="nis"
                    class="form-control"
                    placeholder="Masukkan NIS">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                    Nama Siswa
                    </label>

                    <input type="text"
                    name="namaSiswa"
                    class="form-control"
                    placeholder="Masukkan nama siswa">

                </div>

                <button type="submit"
                name="addSiswa"
                class="btn btn-primary rounded-pill">
                Simpan
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