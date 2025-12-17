

<?php
require __DIR__ . '/../koneksi.php';

// ===============================
// CREATE
// ===============================
if (isset($_POST['submit'])) {

    $nim        = $_POST['nim'];
    $nama_mhs   = $_POST['nama_mhs'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $alamat     = $_POST['alamat'];
    $prodi_id   = $_POST['prodi_id'];

    $sql = "INSERT INTO mahasiswa 
            (nim, nama_mhs, tgl_lahir, alamat, prodi_id)
            VALUES 
            ('$nim', '$nama_mhs', '$tgl_lahir', '$alamat', '$prodi_id')";

    $query = $koneksi->query($sql);

    if ($query) {
        header('Location: ../index.php?p=mahasiswa');
    } else {
        echo "Gagal menyimpan data";
    }
}


// ===============================
// UPDATE
// ===============================
if (isset($_POST['update'])) {

    $nim        = $_POST['nim'];
    $nama_mhs   = $_POST['nama_mhs'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $alamat     = $_POST['alamat'];
    $prodi_id   = $_POST['prodi_id'];

    $sql = "UPDATE mahasiswa SET
                nama_mhs  = '$nama_mhs',
                tgl_lahir = '$tgl_lahir',
                alamat    = '$alamat',
                prodi_id  = '$prodi_id'
            WHERE nim = '$nim'";

    $query = $koneksi->query($sql);

    if ($query) {
        header('Location: ../index.php?p=mahasiswa');
    } else {
        echo "Gagal mengupdate data";
    }
}


// ===============================
// DELETE
// ===============================
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') {

    $nim = $_GET['key'];

    $query = $koneksi->query("DELETE FROM mahasiswa WHERE nim='$nim'");

    if ($query) {
        header('Location: ../index.php?p=mahasiswa');
    } else {
        echo "Gagal menghapus data";
    }
}
?>

