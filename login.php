<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi Fingerprint</title>
    <?php include('bootstrap.php'); ?>
</head>

<body class="bg-light">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Fingerprint <strong>RFID <i class="fa-solid fa-key"></i></strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                </form>
            </div>
        </div>
    </nav>


    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Silakan Login untuk Masuk sebagai-Admin</h1>
                <p class="col-lg-10 fs-4">
                    Selamat datang di halaman Login Admin.
                    Silakan masukan Username dan Password yang benar, dan jangan lupa untuk klik
                    centang kontak Konfirmasi sebelum tekan tombol login.
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="loginProses.php" >
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="isi username" name="username" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me" required> Konfirmasi Login
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    <hr class="my-4">
                    <small class="text-muted">Jika ingin login sebagai Dosen silakan <a href="dosen" class="text-info">Klik Link Ini</a>.</small>
                    <br>
                    <small class="text-muted">Jika ingin login sebagai Mahasiswa silakan <a href="mahasiswa" class="text-info">Klik Link Ini</a>.</small>
                </form>
            </div>
        </div>
    </div>



    <?php include('footer.php'); ?>
</body>

</html>