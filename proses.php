<?php
require 'koneksi.php'; // koneksi ke database

// ===============================
// CREATE
// ===============================
if (isset($_POST['submit'])) {

    $nim        = $_POST['nim'];
    $nama_mhs   = $_POST['nama_mhs'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $alamat     = $_POST['alamat'];

    $sql = "INSERT INTO mahasiswa (nim, nama_mhs, tgl_lahir, alamat)
            VALUES ('$nim', '$nama_mhs', '$tgl_lahir', '$alamat')";

    $query = $koneksi->query($sql);

    if ($query) {
        header('Location: index.php');
    } else {
        echo "Gagal menyimpan data";
    }
}


// ===============================
//  UPDATE 
// ===============================
if (isset($_POST['update'])) {

    $nim        = $_POST['nim']; 
    $nama_mhs   = $_POST['nama_mhs'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $alamat     = $_POST['alamat'];

    $sql = "UPDATE mahasiswa SET 
                nama_mhs   = '$nama_mhs',
                tgl_lahir  = '$tgl_lahir',
                alamat     = '$alamat'
            WHERE nim = '$nim'";

    $query = $koneksi->query($sql);

    if ($query) {
        header('Location: index.php');
    } else {
        echo "Gagal mengupdate data";
    }
}



// ===============================
// DELETE
// ===============================
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') {

    $nim = $_GET['key']; // key dikirim dari index.php

    $query = $koneksi->query("DELETE FROM mahasiswa WHERE nim='$nim'");

    if ($query) {
        header('Location: index.php');
    } else {
        echo "Gagal menghapus data";
    }
}
?>
