<?php 

    session_start();

    require "fungsi.php";

    if(isset($_SESSION['login'])){
        header("Location: guru/index.php");
        exit;
    }

    if(isset($_POST['login'])){

    if(empty($_POST['username']) || empty($_POST['password'])){
        echo "<script>
            alert('Username dan Password harus diisi');
        </script>";
    }else{

        $hasil = login($_POST);

        if($hasil == 1){

        $_SESSION['login'] = true;
        $_SESSION['username'] = $_POST['username'];

        //ambil data guru
        $dataGuru = tampilGuru($_POST['username']);

        $_SESSION['idGuru'] = $dataGuru['idGuru'];

        header("Location: guru/index.php");
        exit;

        }else if($hasil == -1){

            echo "<script>
                alert('Username tidak terdaftar');
            </script>";

        }else{

            echo "<script>
                alert('Password anda salah');
            </script>";

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login-container">
    <div class="card shadow login-card">
        <div class="card-body p-4">

        <h3 class="text-center mb-3">
        LOGIN
        </h3>

        <p class="text-center text-muted">
        Silahkan masukkan username dan password
        </p>

        <form action="" method="POST">
            <div class="mb-3">

                <label class="form-label">
                Username
                </label>

                <input 
                type="text"
                name="username"
                id="username"
                class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">
                Password
                </label>

                <input 
                type="password"
                name="password"
                id="password"
                class="form-control">

            </div>

            <button 
            type="submit"
            name="login"
            class="btn btn-primary btn-login">
            Login
            </button>
        </form>

        </div>
    </div>
</div>

</body>
</html>