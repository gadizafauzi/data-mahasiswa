<h1>Edit Data Program Studi</h1>

<?php 
require __DIR__ . '/../koneksi.php';

$id = $_GET['key'];

$edit = $koneksi->query("SELECT * FROM program_studi WHERE id = '$id'");
$data = $edit->fetch_assoc();
?>

<form action="ProgramStudi/proses.php" method="POST">

    <!-- ID (Primary Key) -->
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <!-- Nama Prodi -->
    <div class="mb-3">
        <label class="form-label">Nama Program Studi</label>
        <input type="text" class="form-control" name="nama_prodi"
               value="<?= $data['nama_prodi'] ?>" required>
    </div> 

    <!-- Jenjang -->
    <div class="mb-3">
        <label class="form-label">Jenjang</label>
        <select name="jenjang" class="form-control" required>
            <option value="D2" <?= $data['jenjang']=='D2' ? 'selected' : '' ?>>D2</option>
            <option value="D3" <?= $data['jenjang']=='D3' ? 'selected' : '' ?>>D3</option>
            <option value="D4" <?= $data['jenjang']=='D4' ? 'selected' : '' ?>>D4</option>
            <option value="S2" <?= $data['jenjang']=='S2' ? 'selected' : '' ?>>S2</option>
        </select>
    </div>

    <!-- Akreditasi -->
    <div class="mb-3">
        <label class="form-label">Akreditasi</label>
        <input type="text" class="form-control" name="akreditasi"
               value="<?= $data['akreditasi'] ?>" required>
    </div>

    <!-- Keterangan -->
    <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <textarea class="form-control" name="keterangan" rows="3"><?= $data['keterangan'] ?></textarea>
    </div>

    <!-- Tombol -->
    <div class="mb-3">
        <input type="submit" name="update" class="btn btn-primary" value="Update">
        <a href="index.php?p=program_studi" class="btn btn-secondary">Kembali ke List</a>
    </div>

</form>
