<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "portofolio"
);

if(!$conn){

    die("Koneksi database gagal");
}

?>