<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

if(isset($_POST['addKelas'])){

    if(empty($_POST['namaKelas'])){
    echo "<script>
        alert('Nama kelas harus diisi');
    </script>";
}else{

    $hasil = tambahKelas($_POST);

    if($hasil > 0){
        echo "<script>
            alert('Berhasil');
            document.location.href='kelas.php';
        </script>";
    }else if($hasil == -1){
        echo "<script>
            alert('Kelas Sudah Ada')
        </script>";
    }else{
        echo "<script>
            alert('Gagal')
        </script>";
    }

    }
}

include "template/header.php";
include "template/navbar.php";
?>

<div class="container mt-4">

    <div class="card shadow border-0">

        <div class="card-body">

        <h3 class="fw-bold mb-4">
        Tambah Kelas
        </h3>

        <form action="" method="POST">

            <div class="mb-3">

                <label class="form-label">
                Nama Kelas
                </label>

                <input type="text"
                name="namaKelas"
                class="form-control"
                placeholder="Contoh: KELAS X A">

            </div>

            <button type="submit"
            name="addKelas"
            class="btn btn-primary rounded-pill">
            Simpan
            </button>

            <a href="kelas.php"
            class="btn btn-secondary rounded-pill">
            Kembali
            </a>

        </form>

        </div>

    </div>

</div>

<?php include "template/footer.php"; ?>