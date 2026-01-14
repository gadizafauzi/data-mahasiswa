<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit;
}

require 'koneksi.php';
$email = $_SESSION['email'];
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Edit Profil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(135deg, #f4f6f8, #e9ecef);">

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="col-md-6 col-lg-4">

    <div class="card border-0 shadow-lg rounded-4">
      <div class="card-body p-4">

        <div class="text-center mb-4">
          <h4 class="fw-bold text-dark mb-0">Edit Profil</h4>
        </div>

        <?php
        // Ambil data user
        $data = $koneksi->query(
          "SELECT nama_lengkap, email FROM pengguna WHERE email='$email'"
        )->fetch_assoc();

        // Proses update
        if(isset($_POST['update'])){
          $nama = $_POST['nama_lengkap'];
          $password = $_POST['password'];

          // Jika password diisi
          if(!empty($password)){
            $pass_hash = md5($password);
            $update = $koneksi->query(
              "UPDATE pengguna 
               SET nama_lengkap='$nama', password='$pass_hash'
               WHERE email='$email'"
            );

            if($update){
              //login ulang jika ganti passwd
              session_destroy();
              header("Location: login.php?msg=password_diubah");
              exit;
            }

          } else {
            // jika hanya update nama
            $update = $koneksi->query(
              "UPDATE pengguna 
               SET nama_lengkap='$nama'
               WHERE email='$email'"
            );

            if($update){
              $_SESSION['nama_lengkap'] = $nama;
              echo "<div class='alert alert-success text-center rounded-3'>
                      Profil berhasil diperbarui
                    </div>";
            }
          }

          if(!$update){
            echo "<div class='alert alert-danger text-center rounded-3'>
                    Gagal memperbarui profil
                  </div>";
          }
        }
        ?>

        <!-- Form -->
        <form method="POST">

          <div class="mb-3">
            <label class="form-label small fw-semibold text-secondary">Email</label>
            <input type="email"
                   class="form-control rounded-3 bg-light"
                   value="<?= $data['email']; ?>" readonly>
          </div>

          <div class="mb-3">
            <label class="form-label small fw-semibold text-secondary">Nama Lengkap</label>
            <input type="text"
                   name="nama_lengkap"
                   class="form-control rounded-3"
                   value="<?= $data['nama_lengkap']; ?>"
                   required>
          </div>

          <div class="mb-4">
            <label class="form-label small fw-semibold text-secondary">Password Baru</label>
            <input type="password"
                   name="password"
                   class="form-control rounded-3"
                   placeholder="Kosongkan jika tidak ingin mengubah">
          </div>

          <div class="d-grid gap-2">
            <button type="submit"
                    name="update"
                    class="btn btn-dark rounded-3 py-2">
              Simpan Perubahan
            </button>

            <a href="index.php"
               class="btn btn-outline-secondary rounded-3 py-2">
              Kembali ke Dashboard
            </a>
          </div>

        </form>

      </div>
    </div>

    <p class="text-center text-muted small mt-3">
      © <?= date('Y'); ?> Sistem Informasi Akademik
    </p>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
