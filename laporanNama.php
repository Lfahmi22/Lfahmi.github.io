<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi Fingerprint</title>
    <?php include('bootstrap.php'); ?>
</head>

<body>
    <?php include('navbar.php'); ?>
    <<br><br><br>
        <div class="container">
            <br>
            <h1><u>Data Laporan Bulanan</u></h1>
            <a class="btn btn-primary" href="laporanTanggal.php" role="button">Laporan Berdasarkan Tanggal</a>
            <a class="btn btn-primary" href="laporanNama.php" role="button">Laporan Berdasarkan Nama</a>
            <br><br>
            <!-- TABEL ANGGOTA -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('koneksi.php');
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT DISTINCT nama from log ORDER BY nama");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <?php echo $row['nama']; ?> </td>
                            <td> <a class="text-info" href="laporanNamaTampil.php?nama=<?php echo $row['nama']; ?>">Tampilkan </a> </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
        <?php include('footer.php'); ?>
</body>

</html>