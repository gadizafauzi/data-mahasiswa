<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
   
    <div class = "container">
        <div class = "row" >
            <div class = "col-lg-6">
                 <h1>Login Form</h1>
                <form action="" method="POST" >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php
                if(isset($_POST['email'])){
                    $email= $_POST['email'];
                    $pass = MD5($_POST['password']);

                    require 'koneksi.php';
                    $ceklogin = $koneksi->query("select nama_lengkap from pengguna where email = '$email' and password = '$pass'");
                    
                    

                    //jika email da password ketemu
                    if($ceklogin -> num_rows == 1){
                        //echo "login berhasil";
                        session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['email'] = $email ;
                        $_SESSION['nama_lengkap'] = $ceklogin->fetch_row()[0] ;
                        header("Location: index.php");
                    }else{
                        echo "login gagal";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>