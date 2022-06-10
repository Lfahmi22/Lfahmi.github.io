<?php
    include('koneksi.php');
    if($_POST['daftar']){
        $id = $_POST['id'];
        $tag = $_POST['tag'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $nohape = $_POST['nohape'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $input = mysqli_query($koneksi, "INSERT INTO anggota (id, tag, nama, jabatan, nohape, email, password) VALUES ('$id', '$tag', '$nama', '$jabatan', '$nohape', '$email', '$password')");
        if($input == TRUE){
            echo "berhasil Input";
            mysqli_query($koneksi, "DELETE FROM tag");
            header('Location: anggota.php');
        }
        else{
            echo "Erorr" . $input . "<br>" . $koneksi->error;;
        }
    }
