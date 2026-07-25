<?php

include "../fungsi.php";
$projects = tampilProject();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Admin Portofolio
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold">
                ADMIN PORTOFOLIO
            </a>
            <a href="../profile.php"
                class="btn btn-outline-light btn-sm">
                <i class="bi bi-house"></i>
                Lihat Website
            </a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card shadow text-center">
                    <div class="card-body">
                        <h6 class="text-muted">

                            Total Project

                        </h6>
                        <h2>

                            <?= jumlahProject(); ?>

                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>
                <i class="bi bi-folder"></i>
                Data Project
            </h2>
            <a href="tambah.php"
                class="btn btn-success">
                <i class="bi bi-plus-circle"></i>
                Tambah Project
            </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Icon</th>
                                <th>Nama Project</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            foreach ($projects as $project):

                            ?>
                                <tr>
                                    <td>
                                        <?= $no++; ?>
                                    </td>
                                    <td class="fs-3">
                                        <?= $project['icon']; ?>
                                    </td>
                                    <td>
                                        <?= $project['nama_project']; ?>
                                        <br>
                                        <small class="text-muted">
                                            <?= $project['deskripsi']; ?>
                                        </small>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">
                                            <?= $project['status']; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?= $project['id']; ?>"
                                            class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                            Edit
                                        </a>
                                        <a href="hapus.php?id=<?= $project['id']; ?>"

                                            onclick="return confirm('Yakin ingin menghapus data ini?');"

                                            class="btn btn-danger btn-sm">

                                            <i class="bi bi-trash"></i>
                                            Hapus
                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>