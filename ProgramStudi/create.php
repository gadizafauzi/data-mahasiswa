<h1>Input Data Program Studi</h1>

<form action="ProgramStudi/proses.php" method="post">

    <!-- Nama Prodi -->
    <div class="mb-3">
        <label for="nama_prodi" class="form-label">Nama Program Studi</label>
        <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" required>
    </div>

    <!-- Jenjang -->
    <div class="mb-3">
        <label for="jenjang" class="form-label">Jenjang</label>
        <select class="form-control" id="jenjang" name="jenjang" required>
            <option value="">-- Pilih Jenjang --</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4">D4</option>
            <option value="S2">S2</option>
        </select>
    </div>

    <!-- Akreditasi -->
    <div class="mb-3">
        <label for="akreditasi" class="form-label">Akreditasi</label>
        <input type="text" class="form-control" id="akreditasi" name="akreditasi" maxlength="12" required>
    </div>

    <!-- Keterangan -->
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
    </div>

    <!-- Tombol -->
    <div class="mb-3">
        <input type="submit" name="submit" class="btn btn-primary">
        <a href="index.php?p=program_studi" class="btn btn-secondary">List Data Prodi</a>
    </div>

</form>
