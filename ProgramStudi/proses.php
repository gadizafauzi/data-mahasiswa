<?php
require __DIR__ . '/../koneksi.php'; // koneksi database

// ===============================
// CREATE (INSERT)
// ===============================
if (isset($_POST['submit'])) {

    $nama_prodi  = $_POST['nama_prodi'];
    $jenjang     = $_POST['jenjang'];
    $akreditasi  = $_POST['akreditasi'];
    $keterangan  = $_POST['keterangan'];

    $sql = "INSERT INTO program_studi 
            (nama_prodi, jenjang, akreditasi, keterangan)
            VALUES 
            ('$nama_prodi', '$jenjang', '$akreditasi', '$keterangan')";

    $query = $koneksi->query($sql);

    if ($query) {
        header('Location: ../index.php?p=program_studi');
    } else {
        echo "Gagal menyimpan data";
    }
}


// ===============================
// UPDATE
// ===============================
if (isset($_POST['update'])) {

    $id          = $_POST['id'];
    $nama_prodi  = $_POST['nama_prodi'];
    $jenjang     = $_POST['jenjang'];
    $akreditasi  = $_POST['akreditasi'];
    $keterangan  = $_POST['keterangan'];

    $sql = "UPDATE program_studi SET 
                nama_prodi = '$nama_prodi',
                jenjang    = '$jenjang',
                akreditasi = '$akreditasi',
                keterangan = '$keterangan'
            WHERE id = '$id'";

    $query = $koneksi->query($sql);

    if ($query) {
        header('Location: ../index.php?p=program_studi');
    } else {
        echo "Gagal mengupdate data";
    }
}


// ===============================
// DELETE
// ===============================
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') {

    $id = $_GET['key']; // dikirim dari list data

    $query = $koneksi->query("DELETE FROM program_studi WHERE id='$id'");

    if ($query) {
        header('Location: ../index.php?p=program_studi');
    } else {
        echo "Gagal menghapus data";
    }
}
?>
