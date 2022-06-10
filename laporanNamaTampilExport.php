<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi Fingerprint</title>
  </head>
  <body>
    <?php
        $nama = $_GET['nama'];
    ?>
    
    <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Laporan Bulanan nama $nama.xls");
	?>
    <!-- TABEL ANGGOTA -->
        <table class="table table-sm table-responsive-sm">
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
            <?php
                include('koneksi.php');
                $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM log WHERE nama='$nama' ");
                while($row = mysqli_fetch_array($sql)){
            ?>
            <tbody>
                <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td> <?php echo $row['tanggal']; ?> </td>
                    <td> <?php echo $row['jam']; ?> </td>
                    <td> <?php echo $row['id']; ?> </td>
                    <td> <?php echo $row['nama']; ?> </td>
                    <td> <?php echo $row['jabatan']; ?> </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
  </body>
</html>