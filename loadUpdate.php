<?php
    include('koneksi.php');
    $keterangan = $_GET['keterangan'];
    $update = mysqli_query($koneksi, "UPDATE loadData SET keterangan='$keterangan' WHERE no=1");
    if($update == TRUE){
        echo "Update Berhasil";
    }
    else{
        echo "Error";
    }
?>