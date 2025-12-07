<h1>Edit Data Mahasiswa</h1>

<?php 
require 'koneksi.php';

$nim = $_GET['key'];

$edit = $koneksi->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
$data = $edit->fetch_assoc();
?>

<form action="proses.php" method="POST">
    <input type="text" name="nim" value="<?= $data['nim'] ?>" hidden>

    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" name="nama_mhs" 
               value="<?= $data['nama_mhs'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir"
               value="<?= $data['tgl_lahir'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="3"><?= $data['alamat'] ?></textarea>
    </div>

    <div class="mb-3">
        <input type="submit" name="update" class="btn btn-primary" value="Update">
        <a href="index.php?p=mahasiswa" class="btn btn-secondary">Kembali ke List</a>
    </div>

</form>
