<?php

include "koneksi.php";
//ambil semua project

function tampilProject()
{

    global $conn;
    $data = mysqli_query(
        $conn,
        "SELECT * FROM projects"
    );
    $hasil = [];
    while ($row = mysqli_fetch_assoc($data)) {

        $hasil[] = $row;
    }
    return $hasil;
}
//tambah project

function tambahProject($data)
{
    global $conn;
    $nama = $data['nama_project'];
    $deskripsi = $data['deskripsi'];
    $icon = $data['icon'];
    $status = $data['status'];
    mysqli_query(
        $conn,

        "INSERT INTO projects
    (
        nama_project,
        deskripsi,
        icon,
        status
    )

    VALUES
    (
        '$nama',
        '$deskripsi',
        '$icon',
        '$status'
    )"

    );
    return mysqli_affected_rows($conn);
}
//hapus project

function hapusProject($id)
{
    global $conn;
    mysqli_query(
        $conn,

        "DELETE FROM projects
        WHERE id='$id'"

    );
    return mysqli_affected_rows($conn);
}
//ambil project by id

function cariProject($id)
{
    global $conn;
    $data = mysqli_query(
        $conn,

        "SELECT * FROM projects
        WHERE id='$id'"

    );
    return mysqli_fetch_assoc($data);
}
//edit project

function editProject($data)
{
    global $conn;
    $id = $data['id'];

    $nama = $data['nama_project'];

    $deskripsi = $data['deskripsi'];

    $icon = $data['icon'];

    $status = $data['status'];
    mysqli_query(
        $conn,

        "UPDATE projects SET

        nama_project='$nama',

        deskripsi='$deskripsi',

        icon='$icon',

        status='$status'
        WHERE id='$id'"

    );
    return mysqli_affected_rows($conn);
}

//hitung total project

function jumlahProject()
{

    global $conn;
    $data = mysqli_query(
        $conn,
        "SELECT COUNT(*) AS total FROM projects"
    );
    $hasil = mysqli_fetch_assoc($data);
    return $hasil['total'];
}
