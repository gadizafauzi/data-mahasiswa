<?php

    $host = "localhost";
    $user = "root";
    $password="";
    $db ="db_akademik";

    $koneksi = new Mysqli($host,$user,$password,$db);

    if($koneksi->connect_error){
        echo "Koneksi Gagal!";
    }
?>