<?php
session_start();
// cek cookie

setcookie('login', $_SESSION["login"] = true, time() + 600); //10 menit

?>

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
  <br><br><br>
  <center>
    <form method="post" action="crud/loginAkun.php">
      <h1 style="text-align: center;"><b>LOGIN TO OZARK GLASSES STORE</b></h1>
      <br><br>
      <table>
        <tr>
          <td><label for="email" class="col-sm-2 col-form-label">Email</label></td>
          <td><input type="email" class="form-control" id="email" name="email"></td>
        </tr>
        <tr>
          <td><label for="password" class="col-sm-2 col-form-label">Password</label></td>
          <td><input type="password" class="form-control" id="password" name="password"></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type="checkbox" class="form-check-input" id="remember" name="remember" value="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
          </td>
        </tr>
      </table>

      <center><br><br>
        <button class="btn btn-primary mx-auto" type="submit" name="login-user">LOG IN USER</button></td>
        <button class="btn btn-primary mx-auto" type="submit" name="login-admin">LOG IN ADMIN</button>
      </center>

      <div class="center">
        <br>
        <p style="text-align: center;">Anda Belum Punya Akun?
          <a href="registrasi.php">Register here.</a>
        </p>
      </div>
    </form>
  </center>
</body>