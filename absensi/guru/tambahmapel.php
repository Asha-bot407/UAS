<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

if(isset($_POST['addMapel'])){

    if(empty($_POST['namaMapel'])){
    echo "<script>
        alert('Nama Mapel harus diisi');
    </script>";
}else{

    $hasil = tambahMapel($_POST);

    if($hasil > 0){
        echo "<script>
            alert('Berhasil');
            document.location.href='mapel.php';
        </script>";
    }else if($hasil == -1){
        echo "<script>
            alert('Mapel Sudah Ada')
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
            Tambah Mata Pelajaran
            </h3>

            <form action="" method="POST">

                <div class="mb-3">

                    <label class="form-label">
                    Nama Mapel
                    </label>

                    <input type="text"
                    name="namaMapel"
                    class="form-control"
                    placeholder="Contoh: Matematika">

                </div>

                <button type="submit"
                name="addMapel"
                class="btn btn-primary rounded-pill">
                Simpan
                </button>

                <a href="mapel.php"
                class="btn btn-secondary rounded-pill">
                Kembali
                </a>

            </form>

        </div>

    </div>

</div>

<?php include "template/footer.php"; ?>