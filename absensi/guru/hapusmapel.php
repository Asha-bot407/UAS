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

$hasil = hapusMapel($id);

if($hasil > 0){

    echo "<script>
            alert('Berhasil');
            document.location.href='mapel.php';
        </script>";

}else{

    echo "<script>
            alert('Gagal');
            document.location.href='mapel.php';
        </script>";

}
?>