<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Absensi Fingerprint</title>
  <?php include('bootstrap.php'); ?>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      setInterval(function() {
        $("#screen").load('load.php')
      }, 100);
    });
  </script>
</head>

<body>
  <?php include('navbar.php'); ?>
  <?php
  $no = $_GET['no'];
  include('koneksi.php');
  $data = mysqli_query($koneksi, "SELECT * FROM anggota WHERE no='$no' ");
  $row = mysqli_fetch_array($data);
  ?>
  <br><br><br>
  <div class="container">
    <br>
    <center>
      <h4><u>Edit Anggota</u></h4><br>
    </center>
    <form class="p-4 p-md-5 border rounded-3 bg-light" action="editAnggotaProses.php" method="post">
      <div class="mb-3">
        <label> ID: <?php echo $row['id']; ?></label>
        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>" required>
      </div>
      <div class="mb-3">
        <label> Jabatan: </label>
        <input type="text" class="form-control" name="jabatan" value="<?php echo $row['jabatan']; ?>" required>
      </div>
      <div class="mb-3">
        <label> Nama: </label>
        <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>" required>
      </div>
      <div class="mb-3">
        <label> NIM: </label>
        <input type="text" class="form-control" name="nim" value="<?php echo $row['nim']; ?>" required>
      </div>
      <div class="mb-3">
        <label> Nomor Handphone: </label>
        <input type="number" class="form-control" name="nohape" value="<?php echo $row['nohape']; ?>" required>
      </div>
      <div class="mb-3">
        <label> Email: </label>
        <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
      </div>

      <button type="submit" name="edit" value="edit" class="btn btn-info btn-block">Simpan</button>
    </form>

  </div>

</body>

</html>