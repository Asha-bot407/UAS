<?php
//fungsi buat akun
require "koneksi.php";

function buatAkun($data){
    global $koneksi;
    $username = strtolower(mysqli_real_escape_string($koneksi, $data['username']));
    $password = mysqli_real_escape_string($koneksi, $data['password']);
    $namaGuru = mysqli_real_escape_string($koneksi, $data['namaGuru']);
    

    $hasilCek = mysqli_query(
                $koneksi,
                "SELECT username FROM tbl_guru WHERE username='$username'"
            );

    if(mysqli_num_rows($hasilCek) != 0){
        return -1;
    }else{
        $password = password_hash($password, PASSWORD_DEFAULT);

        $queryBuatAkun = "INSERT INTO tbl_guru (username, password, namaGuru)
        VALUES('$username', '$password', '$namaGuru')";

        mysqli_query($koneksi, $queryBuatAkun);
        
        $hasil = mysqli_affected_rows($koneksi);

        if($hasil > 0){
            return 1;
        }else{
            return 0;
        }
    }
}


//fungsi login
function login($loginakun){
    global $koneksi;
    $username = strtolower(mysqli_real_escape_string($koneksi, $loginakun['username']));
    $password = mysqli_real_escape_string($koneksi, $loginakun['password']);


    $cekLoginUser = "SELECT * FROM tbl_guru WHERE username = '$username'";
    $hasilCekLoginUser = mysqli_query($koneksi, $cekLoginUser);

    if(mysqli_num_rows($hasilCekLoginUser)!= 1){
          return -1;
    }else{
        $cekPassword = mysqli_fetch_assoc($hasilCekLoginUser);  
        if(password_verify($password, $cekPassword['password'])){
             return 1;
        }else{
            return 0;
        }
    }
}

//tampil data guru
function tampilGuru($username){
    global $koneksi;

    $query = "SELECT * FROM tbl_guru WHERE username= '$username'";
    $hasil = mysqli_query($koneksi, $query);

    return mysqli_fetch_assoc($hasil);
}

//tampil kelas
function tampilKelas(){
    global $koneksi;

    $query = "SELECT * FROM tbl_kelas";
    $hasil = mysqli_query($koneksi, $query);

    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }

    return $rows;
}


//tambahkelas
function tambahKelas($data){

    global $koneksi;

    $namaKelas = mysqli_real_escape_string($koneksi, $data['namaKelas']);

    $hasilKelas = mysqli_query(
        $koneksi,
        "SELECT namaKelas FROM tbl_kelas WHERE namaKelas= '$namaKelas'"
    );

    if(mysqli_num_rows($hasilKelas) != 0){
        return -1;
    }else{
        $queryTambahKelas = "INSERT INTO tbl_kelas (namaKelas)
        VALUES('$namaKelas')";

        mysqli_query($koneksi, $queryTambahKelas);
        
        $hasil = mysqli_affected_rows($koneksi);

        if($hasil > 0){
            return 1;
        }else{
            return 0;
        }
    }
}

//edit kelas
function tampilKelasById($id){
    global $koneksi;

    $queryKelas = "SELECT * FROM tbl_kelas WHERE idKelas= '$id'";
    $hasilKelas = mysqli_query($koneksi, $queryKelas);

    return mysqli_fetch_assoc($hasilKelas);
}

function updateKelas($data){

    global $koneksi;

    $idKelas = mysqli_real_escape_string($koneksi, $data['idKelas']);
    $namaKelas = mysqli_real_escape_string($koneksi, $data['namaKelas']);

    $hasilUpKelas = mysqli_query(
        $koneksi,
        "SELECT *
        FROM tbl_kelas
        WHERE namaKelas='$namaKelas'
        AND idKelas != '$idKelas'"
    );

    if(mysqli_num_rows($hasilUpKelas) != 0){
        return -1;
    }else{
        

        $queryUpKelas = "UPDATE tbl_kelas
                            SET namaKelas='$namaKelas'
                            WHERE idKelas='$idKelas'";

        mysqli_query($koneksi, $queryUpKelas);
        
        $hasil = mysqli_affected_rows($koneksi);

        if($hasil > 0){
            return 1;
        }else{
            return 0;
        }
    }

}

//hapus kelas

function hapusKelas($id){

    global $koneksi;

    $queryHapusKelas = "DELETE FROM tbl_kelas
                        WHERE idKelas='$id'";

    mysqli_query($koneksi, $queryHapusKelas);

    $hasil = mysqli_affected_rows($koneksi);

        if($hasil > 0){
            return 1;
        }else{
            return 0;
        }
    
}

//tampil mapel
function tampilMapel(){
    global $koneksi;

    $query = "SELECT * FROM tbl_mapel";
    $hasil = mysqli_query($koneksi, $query);

    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }

    return $rows;
}


//tambahmapel
function tambahMapel($data){

    global $koneksi;

    $namaMapel = mysqli_real_escape_string($koneksi, $data['namaMapel']);

    $hasilMapel = mysqli_query(
        $koneksi,
        "SELECT namaMapel FROM tbl_mapel WHERE namaMapel= '$namaMapel'"
    );

    if(mysqli_num_rows($hasilMapel) != 0){
        return -1;
    }else{
        $queryTambahMapel = "INSERT INTO tbl_mapel (namaMapel)
        VALUES('$namaMapel')";

        mysqli_query($koneksi, $queryTambahMapel);
        
        $hasil = mysqli_affected_rows($koneksi);

        if($hasil > 0){
            return 1;
        }else{
            return 0;
        }
    }
}

//edit mapel
function tampilMapelById($id){
    global $koneksi;

    $queryMapel = "SELECT * FROM tbl_mapel WHERE idMapel= '$id'";
    $hasilMapel = mysqli_query($koneksi, $queryMapel);

    return mysqli_fetch_assoc($hasilMapel);
}

function updateMapel($data){

    global $koneksi;

    $idMapel = mysqli_real_escape_string($koneksi, $data['idMapel']);
    $namaMapel = mysqli_real_escape_string($koneksi, $data['namaMapel']);

    $hasilUpMapel = mysqli_query(
        $koneksi,
        "SELECT *
        FROM tbl_mapel
        WHERE namaMapel='$namaMapel'
        AND idMapel != '$idMapel'"
    );

    if(mysqli_num_rows($hasilUpMapel) != 0){
        return -1;
    }else{
        

        $queryUpMapel = "UPDATE tbl_mapel
                            SET namaMapel='$namaMapel'
                            WHERE idMapel='$idMapel'";

        mysqli_query($koneksi, $queryUpMapel);
        
        $hasil = mysqli_affected_rows($koneksi);

        if($hasil > 0){
            return 1;
        }else{
            return 0;
        }
    }

}

//hapus mapel

function hapusMapel($id){

    global $koneksi;

    $queryHapusMapel = "DELETE FROM tbl_mapel
                        WHERE idMapel='$id'";

    mysqli_query($koneksi, $queryHapusMapel);

    $hasil = mysqli_affected_rows($koneksi);

        if($hasil > 0){
            return 1;
        }else{
            return 0;
        }
    
}

//tampil siswa

function tampilSiswa(){
    global $koneksi;

    $query = "SELECT
            tbl_siswa.*,
            tbl_kelas.namaKelas
            FROM tbl_siswa
            JOIN tbl_kelas
            ON tbl_siswa.idKelas = tbl_kelas.idKelas";

            $hasil = mysqli_query($koneksi, $query);

            $rows = [];

            while($row = mysqli_fetch_assoc($hasil)){
                $rows[] = $row;
            }

            return $rows;
}

//tambah siswa

function tambahSiswa($data){
    global $koneksi;

    $idKelas = mysqli_real_escape_string($koneksi, $data['idKelas']);
    $nis = mysqli_real_escape_string($koneksi, $data['nis']);
    $namaSiswa = mysqli_real_escape_string($koneksi, $data['namaSiswa']);

    $hasilSiswa = mysqli_query(
        $koneksi,
        "SELECT * FROM tbl_siswa WHERE nis= '$nis'"
    );

    if(mysqli_num_rows($hasilSiswa) != 0){
        return -1;
    }else{
        $queryTambahSiswa = "INSERT INTO tbl_siswa (idKelas, nis, namaSiswa)
        VALUES('$idKelas','$nis','$namaSiswa')";

        mysqli_query($koneksi, $queryTambahSiswa);
        
        $hasil = mysqli_affected_rows($koneksi);

        if($hasil > 0){
            return 1;
        }else{
            return 0;
        }
    }
}

//edit siswa

function tampilSiswaById($id){

    global $koneksi;

    $query = "SELECT 
        tbl_siswa.*,
        tbl_kelas.namaKelas
    FROM tbl_siswa
    JOIN tbl_kelas
    ON tbl_siswa.idKelas = tbl_kelas.idKelas
    WHERE idSiswa='$id'
    ";

    $hasil = mysqli_query($koneksi,$query);

    return mysqli_fetch_assoc($hasil);

}

//edit siswa
function updateSiswa($data){

    global $koneksi;

    $idSiswa = mysqli_real_escape_string($koneksi, $data['idSiswa']);
    $idKelas = mysqli_real_escape_string($koneksi, $data['idKelas']);
    $nis = mysqli_real_escape_string($koneksi, $data['nis']);
    $namaSiswa = mysqli_real_escape_string($koneksi, $data['namaSiswa']);


    // cek NIS agar tidak bentrok dengan siswa lain
    $cekNis = mysqli_query(
        $koneksi,
        "SELECT * FROM tbl_siswa 
         WHERE nis='$nis'
         AND idSiswa != '$idSiswa'"
    );


    if(mysqli_num_rows($cekNis) != 0){

        return -1;

    }else{

        $query = "UPDATE tbl_siswa
        SET 
            idKelas='$idKelas',
            nis='$nis',
            namaSiswa='$namaSiswa'
        WHERE idSiswa='$idSiswa'
        ";


        mysqli_query($koneksi,$query);


        $hasil = mysqli_affected_rows($koneksi);


        if($hasil > 0){
            return 1;
        }else{
            return 0;
        }

    }

}

//hapus siswa

function hapusSiswa($id){

    global $koneksi;


    $queryHapusSiswa = "DELETE FROM tbl_siswa
                        WHERE idSiswa='$id'
                        ";

    mysqli_query($koneksi,$queryHapusSiswa);

    $hasil = mysqli_affected_rows($koneksi);

    if($hasil > 0){
        return 1;
    }else{
        return 0;
    }

}
//tampil siswa berdasarkan kelas

function tampilSiswaByKelas($idKelas){

    global $koneksi;


    $query = "SELECT *
                FROM tbl_siswa
                WHERE idKelas='$idKelas'
                ";


    $hasil = mysqli_query($koneksi,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($hasil)){

        $rows[] = $row;

    }
    return $rows;
}

//simpan absensi

function simpanAbsensi($data){

    global $koneksi;


    $idGuru = $_SESSION['idGuru'];
    $idMapel = $data['idMapel'];
    $tanggal = date('Y-m-d');


    foreach($data['status'] as $idSiswa => $status){


        $query = "INSERT INTO tbl_absensi
                    (idGuru, idSiswa, idMapel, tanggal, status)
                    VALUES
                    ('$idGuru',
                    '$idSiswa',
                    '$idMapel',
                    '$tanggal',
                    '$status')
                    ";

        mysqli_query($koneksi, $query);
    }
    return mysqli_affected_rows($koneksi);
}

//tampil rekap absensi

function tampilAbsensi(){

    global $koneksi;

    $query = "SELECT 
                tbl_absensi.*,
                tbl_siswa.nis,
                tbl_siswa.namaSiswa,
                tbl_kelas.namaKelas,
                tbl_mapel.namaMapel,
                tbl_guru.namaGuru
            FROM tbl_absensi
            JOIN tbl_siswa
            ON tbl_absensi.idSiswa = tbl_siswa.idSiswa
            JOIN tbl_kelas
            ON tbl_siswa.idKelas = tbl_kelas.idKelas
            JOIN tbl_mapel
            ON tbl_absensi.idMapel = tbl_mapel.idMapel
            JOIN tbl_guru
            ON tbl_absensi.idGuru = tbl_guru.idGuru
            ";

    $hasil = mysqli_query($koneksi,$query);

    $rows=[];
    while($row=mysqli_fetch_assoc($hasil)){
        $rows[]=$row;
    }
    return $rows;
}
?>