<?php
    include('koneksi.php');
    if($_POST['edit']){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jabatan = $_POST['jabatan'];
        $nohape = $_POST['nohape'];
        $email = $_POST['email'];

        $input = mysqli_query($koneksi, "UPDATE anggota SET nama='$nama', nim='$nim', jabatan='$jabatan', nohape='$nohape', email='$email' WHERE id='$id' ");
        if($input == TRUE){
            echo "berhasil Update";
            header('Location: anggota.php');
        }
        else{
            echo "Erorr" . $input . "<br>" . $koneksi->error;;
        }
    }
    ?>