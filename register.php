<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#f4f6f8;">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6 col-lg-5">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">

                <div class="text-center mb-4">
                    <h3 class="fw-semibold text-dark">Registrasi Akun</h3>
                </div>

                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label small text-muted">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control rounded-3"
                               placeholder="Nama lengkap" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small text-muted">Email</label>
                        <input type="email" name="email" class="form-control rounded-3"
                               placeholder="contoh@gmail.com" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small text-muted">Password</label>
                        <input type="password" name="password" class="form-control rounded-3"
                               placeholder="Buat password" required>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" name="register"
                                class="btn btn-dark rounded-3">
                            Daftar
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <small class="text-muted">
                            Sudah punya akun?
                            <a href="login.php" class="text-decoration-none fw-semibold text-dark">
                                Login
                            </a>
                        </small>
                    </div>

                </form>

                <?php
                if(isset($_POST['register'])){
                    require 'koneksi.php';

                    $nama  = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $pass  = md5($_POST['password']);

                    $cek = $koneksi->query("SELECT * FROM pengguna WHERE email='$email'");

                    if($cek->num_rows > 0){
                        echo "<div class='alert alert-light border mt-3 text-center rounded-3'>
                                Email sudah terdaftar
                              </div>";
                    } else {
                        $simpan = $koneksi->query(
                            "INSERT INTO pengguna (nama_lengkap, email, password)
                             VALUES ('$nama', '$email', '$pass')"
                        );

                        if($simpan){
                            echo "<div class='alert alert-success mt-3 text-center rounded-3'>
                                    Registrasi berhasil
                                    <a href='login.php' class='fw-semibold'>Login</a>
                                  </div>";
                        } else {
                            echo "<div class='alert alert-light border mt-3 text-center rounded-3'>
                                    Registrasi gagal
                                  </div>";
                        }
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
