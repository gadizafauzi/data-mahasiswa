<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container ">
    <a class="navbar-brand text-white" href="#">Akademik</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-white <?= (!isset($_GET['p']) || $_GET['p'] == 'home') ? 'active' : '' ?>" 
             href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white <?= (isset($_GET['p']) && $_GET['p'] == 'mahasiswa') ? 'active' : '' ?>" 
             href="index.php?p=mahasiswa">Mahasiswa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white <?= (isset($_GET['p']) && $_GET['p'] == 'program_studi') ? 'active' : '' ?>" 
             href="index.php?p=program_studi">Program Studi</a>
        </li>



      </ul>
    </div>
  </div>
</nav>

<div class="container my-4">

  <?php 
    $page = isset($_GET['p']) ? $_GET['p'] : 'home';

   switch ($page) {
      case 'home': include 'home.php'; break;
      case 'mahasiswa': include 'Mahasiswa/list.php'; break; 
      case 'create': include 'Mahasiswa/create.php'; break;
      case 'edit': include 'Mahasiswa/edit.php'; break;
      case 'program_studi': include 'ProgramStudi/list.php'; break;
      case 'ps_create': include 'ProgramStudi/create.php'; break;
      case 'ps_edit': include 'ProgramStudi/edit.php'; break;
      default: echo "404";
    }

  ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
