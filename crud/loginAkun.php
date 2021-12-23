<?php
include "conn.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$checkEmail;

// cek cookie
if (isset($_COOKIE['login'])) {
    if($_COOKIE['login'] == 'true'){
        $_SESSION['login'] = true;
    }
}

//ntar kasih section supaya tau mana admin mana user
if (isset($_POST['login-user'])) {
    $tabel = mysqli_query($conn, "SELECT * FROM user");
    $numRow = mysqli_num_rows($tabel);
    foreach ($tabel as $row) :
        if ($row['email'] == $email) {
            $checkEmail = $row["email"];
            if ($row['password'] == $password) {
                $_SESSION['username'] = $row['nama_user'];

                // set session
                $_SESSION["login"] = true;

                // cek remember me
                if (isset($_POST["remember"])) {
                // buat cookie
                setcookie('login', true, time()+600); //10 menit
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
} else if (isset($_POST['login-admin'])) {
    $tabel = mysqli_query($conn, "SELECT * FROM admin");
    $numRow = mysqli_num_rows($tabel);
    foreach ($tabel as $row) :
        if ($row['email'] == $email) {
            $checkEmail = $row["email"];
            if ($row['password'] == $password) {
                $_SESSION['useradmin'] = $row['nama_admin'];
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
