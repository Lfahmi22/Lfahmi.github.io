<?php
    include("koneksi.php");
    if($_POST['daftar']){
        $id = $_POST['id'];
        // mysqli_query($koneksi, "DELETE FROM tag");
        $update = mysqli_query($koneksi, "UPDATE updateData SET perintah='daftar', nilai='$id' WHERE no=1");
        if($update == TRUE){
            echo "berhasil Update";
            header('Location: 12enroll.php');
        }
        else{
            echo "Error";
        }
    }
?>