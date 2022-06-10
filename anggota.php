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
    <br><br><br>
    <div class="container">
        <br>
        <h1><u>Data Anggota</u></h1><br>
        <!-- TABEL ANGGOTA -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Fingerprint</th>
                        <th scope="col">Tag RFID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Handphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include('koneksi.php');
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM anggota");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <th scope="row"> <?php echo $no++; ?> </th>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['tag']; ?> </td>
                            <td> <?php echo $row['nama']; ?> </td>
                            <td> <?php echo $row['nim']; ?> </td>
                            <td> <?php echo $row['jabatan']; ?> </td>
                            <td> <?php echo $row['nohape']; ?> </td>
                            <td> <?php echo $row['email']; ?> </td>
                            <td>
                                <a href="editAnggota.php?no=<?php echo $row['no']; ?> ">
                                    <span style="color: darkcyan;">
                                        <i class="fas fa-user-edit "></i> </span> </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
    <?php include('footer.php'); ?>
</body>

</html>