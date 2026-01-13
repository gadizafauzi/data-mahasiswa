<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#f4f6f8;">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-5 col-lg-4">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">

                <div class="text-center mb-4">
                    <h3 class="fw-semibold text-dark">Sistem Akademik</h3>
                    <p class="text-muted small mb-0">Silakan login untuk melanjutkan</p>
                </div>

                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label small text-muted">Email</label>
                        <input type="email" name="email" class="form-control rounded-3"
                               placeholder="email@kampus.ac.id" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small text-muted">Password</label>
                        <input type="password" name="password" class="form-control rounded-3"
                               placeholder="••••••••" required>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-dark rounded-3">
                            Login
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <small class="text-muted">
                            Belum punya akun?
                            <a href="register.php" class="text-decoration-none fw-semibold text-dark">
                                Daftar
                            </a>
                        </small>
                    </div>

                </form>

                <?php
                if(isset($_POST['email'])){
                    $email = $_POST['email'];
                    $pass  = md5($_POST['password']);

                    require 'koneksi.php';

                    $ceklogin = $koneksi->query(
                        "SELECT nama_lengkap FROM pengguna 
                         WHERE email='$email' AND password='$pass'"
                    );

                    if($ceklogin->num_rows == 1){
                        session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['email'] = $email;
                        $_SESSION['nama_lengkap'] = $ceklogin->fetch_row()[0];
                        header("Location: index.php");
                    } else {
                        echo "<div class='alert alert-light border mt-3 text-center rounded-3'>
                                Email atau password salah
                              </div>";
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
