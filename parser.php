<?php
    include('koneksi.php');
    $update= mysqli_query($koneksi, "SELECT * FROM updateData ORDER by no DESC LIMIT 1");
    $row = mysqli_fetch_array($update);
    $perintah = $row['perintah'];
    $nilai = $row['nilai'];

    $config = array(
        'perintah' =>$perintah
        ,'nilai'=>$nilai
    );
    echo json_encode($config);
?>