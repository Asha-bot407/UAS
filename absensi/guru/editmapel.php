<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

require "../fungsi.php";

if(!isset($_GET['id'])){
    header("Location: mapel.php");
    exit;
}

$id = $_GET['id'];

$mapel = tampilMapelById($id);

if(isset($_POST['editMapel'])){

    $hasil = updateMapel($_POST);

    if($hasil > 0){

        echo "<script>
            alert('Data berhasil diubah');
            document.location.href='mapel.php';
        </script>";

    }else if($hasil == -1){

        echo "<script>
            alert('Nama Mapel sudah digunakan');
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
            Edit Mata Pelajaran
            </h3>

            <form action="" method="POST">

                <input 
                type="hidden"
                name="idMapel"
                value="<?= $mapel['idMapel']; ?>">

                <div class="mb-3">

                    <label class="form-label">
                    Nama Mapel
                    </label>

                    <input 
                    type="text"
                    name="namaMapel"
                    class="form-control"
                    value="<?= $mapel['namaMapel']; ?>">

                </div>

                <button type="submit"
                name="editMapel"
                class="btn btn-warning rounded-pill">
                Update
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