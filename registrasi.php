<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>OZARK GLASSES STORE</title>
</head>

<body>
    <script src="js/bootsrap.js"></script>
    <script src="js/popper.min.js"></script>
    <div class="container d-flex align-items-center justify-content-center" style="width: 100vh;">
        <div class="registrasi" style="width:50%">
            <form method="post" action="crud/daftarAkun.php">
                <h1 class="text-center">Registrasi</h1>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Firenze" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Bandung" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" placeholder="Firenze" name="no_telp" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="firenze@gmail.com" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="" name="password" required>
                </div>
                <center>
                    <button type="submit" value="daftar" name="daftar" class="btn btn-primary mt-4 px-5">Daftar</button>
                    <a href="login.php" type="submit" value="login" name="login" class="btn btn-primary mt-4 px-5">Login</a>
                </center>
            </form>
        </div>
    </div>
</body>

</html>