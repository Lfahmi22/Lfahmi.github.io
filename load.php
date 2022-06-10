<?php
    include('koneksi.php');
    $sql = mysqli_query($koneksi, "SELECT * FROM loadData ORDER by no DESC LIMIT 1");
    $row = mysqli_fetch_array($sql);
    echo $row['keterangan'];
?>