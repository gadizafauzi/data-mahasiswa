<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data Program Studi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">

    <h1>List Data Program Studi</h1>
    <a href="index.php?p=ps_create" class="btn btn-primary mb-3">Input Data Program Studi</a>

    <table class="table table-bordered table-striped">
        <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Jenjang</th>
            <th>Akreditasi</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
        <?php
        require __DIR__ . '/../koneksi.php';

        $tampil = $koneksi->query("SELECT * FROM program_studi");
        $no = 1;

        $data = $tampil->fetch_all(MYSQLI_ASSOC);

        foreach ($data as $row):
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['jenjang'] ?></td>
                <td><?= $row['akreditasi'] ?></td>
                <td><?= $row['keterangan'] ?></td>

                <td>
                    <a href="index.php?p=ps_edit&key=<?= $row['id'] ?>"
                       class="btn btn-warning btn-sm">Edit</a>

                    <a href="ProgramStudi/proses.php?key=<?= $row['id'] ?>&aksi=hapus"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
