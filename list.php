<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container mt-4">

        <h1>List Data Mahasiswa</h1>
        <a href="index.php?p=create" class="btn btn-primary mb-3">Input Data Mahasiswa</a>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                require 'koneksi.php';

                $tampil = $koneksi->query("SELECT * FROM mahasiswa");
                $no = 1;

                $data = $tampil->fetch_all(MYSQLI_ASSOC);

                foreach($data as $row):
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['nama_mhs'] ?></td>
                    <td><?= date('d M Y', strtotime($row['tgl_lahir'])) ?></td>
                    <td><?= $row['alamat'] ?></td>

                    <td>
                        <a href="index.php?p=edit&key=<?= $row['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="proses.php?key=<?= $row['nim'] ?>&aksi=hapus" 
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
