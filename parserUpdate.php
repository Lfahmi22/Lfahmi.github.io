<?php
    include('koneksi.php');
    $perintah = $_GET['perintah'];
    $update = mysqli_query($koneksi, "UPDATE updateData SET perintah='$perintah' WHERE no=1");
    if($update == TRUE){
        echo "Update Berhasil";
    }
    else{
        echo "Error";
    }
?>