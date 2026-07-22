<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}


require "../fungsi.php";


$id = $_GET['id'];


$hasil = hapusSiswa($id);


if($hasil > 0){

    echo "
    <script>
        alert('Siswa berhasil dihapus');
        document.location.href='siswa.php';
    </script>";

}else{

    echo "
    <script>
        alert('Siswa gagal dihapus');
        document.location.href='siswa.php';
    </script>";

}

?>