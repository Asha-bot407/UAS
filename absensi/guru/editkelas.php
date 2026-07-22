<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

if(!isset($_GET['id'])){
    header("Location: kelas.php");
    exit;
}

$id = $_GET['id'];

$kelas = tampilKelasById($id);

if(isset($_POST['editKelas'])){

    $hasil = updateKelas($_POST);

    if($hasil > 0){

        echo "<script>
            alert('Data berhasil diubah');
            document.location.href='kelas.php';
        </script>";

    }else if($hasil == -1){

        echo "<script>
            alert('Nama kelas sudah digunakan');
        </script>";

    }else{

        echo "<script>
            alert('Data gagal diubah');
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
            Edit Kelas
            </h3>

            <form action="" method="POST">

                <input 
                type="hidden"
                name="idKelas"
                value="<?= $kelas['idKelas']; ?>">

                <div class="mb-3">

                    <label class="form-label">
                    Nama Kelas
                    </label>

                    <input 
                    type="text"
                    name="namaKelas"
                    class="form-control"
                    value="<?= $kelas['namaKelas']; ?>">

                </div>

                <button type="submit"
                name="editKelas"
                class="btn btn-warning rounded-pill">
                Update
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