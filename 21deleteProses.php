<?php
    include("koneksi.php");
    if($_POST['hapus']){
        $id = $_POST['id'];
        // mysqli_query($koneksi, "DELETE FROM tag");
        $update = mysqli_query($koneksi, "UPDATE updateData SET perintah='hapus', nilai='$id' WHERE no=1");
        if($update == TRUE){
            echo "berhasil Update";
            header("Location: 22delete.php?no=" . $$id);
        }
        else{
            echo "Error";
        }
    }
?>