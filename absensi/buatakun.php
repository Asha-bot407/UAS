<?php

require "fungsi.php";

if(isset($_POST['buatakun'])){

    $hasil = buatAkun($_POST);

    if($hasil > 0){
        echo "<script>
            alert('Berhasil');
            document.location.href='login.php';
        </script>";
    }else if($hasil == -1){
        echo "<script>
            alert('Akun Sudah Terdaftar')
        </script>";
    }else{
        echo "<script>
            alert('Gagal')
        </script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="login-container">

    <div class="card shadow login-card">

        <div class="card-body p-4">
            <h3 class="text-center fw-bold mb-3">
            Buat Akun
            </h3>

            <p class="text-center text-muted">
            Daftarkan akun guru baru
            </p>
            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input 
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"> 
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input 
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Masukkan password">   
                </div>

                <div class="mb-3">
                    <label for="namaGuru" class="form-label">Nama Guru</label>
                    <input 
                    type="text"
                    class="form-control"
                    id="namaGuru"
                    name="namaGuru"
                    placeholder="Masukkan nama lengkap">
                </div> 
                        <button 
                        type="submit"
                        class="btn btn-primary btn-login"
                        name="buatakun">
                        Buat Akun
                        </button>
                        <a href="login.php"
                        class="btn btn-secondary btn-login mt-2">
                        Kembali Login
                        </a>
            </form>


        </div>

    </div>

</div>

</body>
</html>