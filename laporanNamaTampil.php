<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi Fingerprint</title>
    <?php include('bootstrap.php'); ?>
</head>

<body>
    <?php
    include('navbar.php');
    $nama = $_GET['nama'];
    ?>
    <<br><br><br>
        <div class="container">
            <br>
            <h1><u>Data Laporan untuk Nama: <?php echo $nama; ?> </u></h4>
                <br>
                <a class="btn btn-success" href="laporanNamaTampilExport.php?nama=<?php echo $nama; ?>" role="button"> EXPORT TO EXCEL </a>
                <br><br>
                <!-- TABEL ANGGOTA -->
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jabatan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include('koneksi.php');
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM log WHERE nama='$nama' ");
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td> <?php echo $no++; ?> </td>
                                <td> <?php echo $row['tanggal']; ?> </td>
                                <td> <?php echo $row['jam']; ?> </td>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['nama']; ?> </td>
                                <td> <?php echo $row['jabatan']; ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
        </div>
        <?php include('footer.php'); ?>
</body>

</html>