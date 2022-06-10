<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "fingerprintrfiddoorlock";

    $koneksi = mysqli_connect($host, $user, $pass, $database);
    if($koneksi == TRUE){
        // echo "Terhubung ke Database";
    } else{
        echo "Tidak Terhubung ke Database";
    }
?>