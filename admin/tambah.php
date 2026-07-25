<?php

include "../fungsi.php";
if (isset($_POST['submit'])) {
    if (tambahProject($_POST) > 0) {

        echo "
        <script>
        alert('Project berhasil ditambahkan');
        document.location.href='index.php';
        </script>
        ";
    } else {

        echo "
        <script>
        alert('Project gagal ditambahkan');
        </script>
        ";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Tambah Project
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold">

                ADMIN PORTOFOLIO

            </a>
            <a href="index.php"
                class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i>

                Kembali
            </a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">

                            <i class="bi bi-plus-circle"></i>

                            Tambah Project

                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">
                                    Nama Project
                                </label>
                                <input type="text"

                                    name="nama_project"

                                    class="form-control"

                                    placeholder="Masukkan nama project"

                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Deskripsi
                                </label>
                                <textarea

                                    name="deskripsi"

                                    class="form-control"

                                    rows="4"

                                    placeholder="Masukkan deskripsi project"

                                    required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">

                                    Icon

                                </label>
                                <input type="text"

                                    name="icon"

                                    class="form-control"

                                    placeholder="Contoh: 🌐">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Status
                                </label>
                                <input type="text"

                                    name="status"

                                    class="form-control"

                                    placeholder="Contoh: PHP">
                            </div>
                            <button type="submit"

                                name="submit"

                                class="btn btn-success w-100">
                                <i class="bi bi-save"></i>
                                Simpan Project
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>