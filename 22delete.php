<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello Bulma!</title>
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
  include('koneksi.php');
  $data = mysqli_query($koneksi, "SELECT * FROM updateData WHERE no=1");
  $row = mysqli_fetch_array($data);
  $update = mysqli_query($koneksi, "UPDATE loadData SET keterangan='Tunggu...'")
  ?>
  <br><br><br>
  <div class="container text-center">
    <div class="card p-4 p-md-5">
      <div class="card-body">
        <br>
        <h1><u>Delete Fingerprint</u></h1><br>
        <div class="alert alert-info display-5 fw-bold text-dark" role="alert">
          <div id="screen"> </div>
        </div>
        <br>
        <p class="fs-5 mb-4"> Jika sudah <b> Terhapus </b> silahkan klik button di bawah ini, untuk menyelesaikan:</p>
        <br>

        <a class="btn col-6 btn-lg btn-primary" href="23deleteAnggota.php?no=<?php echo $row['nilai']; ?>" role="button">Selesai</a>

      </div>
    </div>

  </div>

</body>

</html>