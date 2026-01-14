<?php
//session | cokies
session_start();
if(!isset($_SESSION['login'])){
  header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    
    <a class="navbar-brand fw-semibold" href="index.php">
        Akademik
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= (!isset($_GET['p']) || $_GET['p'] == 'home') ? 'active' : '' ?>"
             href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($_GET['p'] ?? '') == 'mahasiswa' ? 'active' : '' ?>"
             href="index.php?p=mahasiswa">Mahasiswa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($_GET['p'] ?? '') == 'program_studi' ? 'active' : '' ?>"
             href="index.php?p=program_studi">Program Studi</a>
        </li>
      </ul>

      <!-- User Dropdown -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button"
             data-bs-toggle="dropdown">
             👤 <?= $_SESSION['nama_lengkap']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item text-dark"
                 href="edit_profil.php">
                Edit Profil
              </a>
            </li>
            <li>
              <a class="dropdown-item text-danger"
                 href="logout.php"
                 onclick="return confirm('Yakin ingin logout?')">
                Logout
              </a>
            </li>
          </ul>
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
