<?php
include "conn.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$checkEmail;



//ntar kasih section supaya tau mana admin mana user
if (isset($_POST['login-user'])) {
    $tabel = mysqli_query($conn, "SELECT * FROM user where email = '$email'");
    $row = mysqli_fetch_array($tabel);
    echo $row;
    foreach ($tabel as $row) :
        if ($row['email'] == $email) {
            $checkEmail = $row["email"];
            if ($row['password'] == $password) {
                $_SESSION['username'] = $row['nama_user'];

                // cek remember me
                if (isset($_POST["remember"])) {
                    //buat cookie
                    $_SESSION["login"] = true;
                    setcookie('login', $_SESSION["login"] = true, time() + 600); //10 menit
                }

                header("location: http://localhost/quiz2/home.php");
                break;
            } else {
                header("location: http://localhost/quiz2/login.php");
                break;
            }
            break;
        }
    endforeach;
}
if (isset($_POST['login-admin'])) {
    $tabel = mysqli_query($conn, "SELECT * FROM pengelola");
    foreach ($tabel as $row) :
        if ($row['email'] == $email) {
            $checkEmail = $row["email"];
            if ($row['password'] == $password) {
                $_SESSION['useradmin'] = $row['nama_admin'];

                //chek remeber me
                if (isset($_POST["remember"])) {
                    //buat cookie
                    $_SESSION["login"] = true;
                    setcookie('login', $_SESSION["login"] = true, time() + 600); //10 menit
                }

                header("location: http://localhost/quiz2/home.php");
                break;
            } else {
                header("location: http://localhost/quiz2/login.php");
                break;
            }
            break;
        }
    endforeach;
}
