<?php

session_start();


if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}


require "../fungsi.php";


if(isset($_POST['simpan'])){


    $hasil = simpanAbsensi($_POST);


    if($hasil > 0){

        echo "
        <script>
        alert('Absensi berhasil disimpan');
        document.location.href='index.php';
        </script>";

    }else{

        echo "
        <script>
        alert('Absensi gagal disimpan');
        </script>";

    }

}

?>