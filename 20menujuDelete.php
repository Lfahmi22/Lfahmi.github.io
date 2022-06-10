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
        $("#screen").load('load.php')
      }, 100);
    });
  </script>
</head>

<body>
  <?php include('navbar.php'); ?>
  <br><br><br>
  <div class="container col-md-6 text-center">
    <br>
    <h1><u>Hapus Fingerprint</u></h1><br>

    <div class="card">
      <div class="card-body">

        <!-- FROM ENROLL -->
        <form class="p-4 p-md-5" action="21deleteProses.php" method="post">
          <div class="mb-3">
            <label class="form-label"> Silakan Masukan ID </label>
            <input type="number" class="form-control" name="id" placeholder="Masukan ID..." required>
          </div>
          <button type="submit" name="hapus" value="hapus"class="btn col-6 btn-lg btn-primary">Hapus</button>
        </form>

      </div>
    </div>

  </div>

</body>

</html>