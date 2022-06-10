<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smart IoT</title>
  <?php include('bootstrap.php'); ?>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      setInterval(function() {
        $("#screen").load('14loadTag.php')
      }, 100);
    });
  </script>
</head>

<body>
  <?php include('navbar.php'); ?>
  <?php
  include('koneksi.php');
  $data = mysqli_query($koneksi, "SELECT * FROM updateData WHERE no=1");
  $row = mysqli_fetch_array($data);
  ?>
  <br><br><br>
  <div class="container text-center">
    <br>
    <h1><u>Isi Formulir</u></h1><br>
    <div class="col-md-10 mx-auto col-lg-5">
      <form class="p-4 p-md-5 border rounded-3 bg-light" action="15daftarProses.php" method="post">
        <div class="mb-3">
          <label class="form-label"> ID Fingerprint</label>
          <input type="number" class="form-control" name="id" value="<?php echo $row['nilai']; ?>" required>
        </div>
        <div id="screen"></div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="nama" placeholder="Masukan Nama" required>
          <label for="floatingInput"> Nama </label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="jabatan" placeholder="Masukan Jabatan" required>
          <label for="floatingInput"> Jabatan </label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="nohape" placeholder="Masukan Nomor Handphone" required>
          <label for="floatingInput"> Nomor Handphone </label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Masukan Email" required>
          <label for="floatingInput"> Email </label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
          <label for="floatingPassword">Password</label>
        </div>
        <button type="submit" name="daftar" value="daftar" id="floatingInput" class="btn col-6 btn-lg btn-primary">Daftar</button>
      </form>
    </div>

  </div>

</body>

</html>