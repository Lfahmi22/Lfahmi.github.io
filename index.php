<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location: login.php?pesan=belum_login");
}
?>
<!-- cek apakah sudah login -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fingerprint RFID</title>
  <?php include('bootstrap.php'); ?>
</head>

<body>
  <?php include('navbar.php'); ?>

  <div class="bg-light text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-dark">Selamat Datang Admin</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">
          Disini Admin bisa melakukan berbagai macam hal, seperti melihat data Anggota melihat Log data.<br>
          Juga dapat menambahkan Anggota baru baik itu Dosen atau Mahasiswa, termasuk mendaftarkan Kartu RFID dan juga Scan Jari mereka.
          <br>Bisa edit data Anggota, juga bisa menghapus Data Anggota, termasuk menghapus Kartu RFID dan juga Scan Jari yang sudah didaftarkan sebelumnya.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a href="10menujuEnroll.php" type="button" class="btn btn-primary btn-lg px-4 me-sm-3 fw-bold">Daftarkan Anggota</a>
          <a href="log.php" type="button" class="btn btn-info btn-lg px-4">Log Data</a>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>

</html>