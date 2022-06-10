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
            <h1><u>Log Data</u></h1>
            <a class="btn btn-primary" href="laporan.php" role="button">Buka Data Laporan</a>
            <br><br>
            <!-- TABEL ANGGOTA -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Id Fingerprint</th>
                        <th scope="col">Tag RFID</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('koneksi.php');
                    header("refresh:2");
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM log ORDER by no DESC LIMIT 5");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <th scope="row"> <?php echo $no++; ?> </th>
                            <td> <?php echo $row['tanggal']; ?> </td>
                            <td> <?php echo $row['jam']; ?> </td>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['tag']; ?> </td>
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