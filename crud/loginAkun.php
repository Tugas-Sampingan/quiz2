<?php
include "conn.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$checkEmail;

//ntar kasih section supaya tau mana admin mana user
if (isset($_POST['login-user'])) {
    $tabel = mysqli_query($conn, "SELECT * FROM user");
    foreach ($tabel as $row) :
        if ($row['email'] == $email) {
            $checkEmail = $row["email"];
            if ($row['password'] == $password) {
                $_SESSION['username'] = $row['nama_user'];

                // set session
                $_SESSION["login"] = true;

                header("location: http://localhost/quiz2/home.php");
                break;
            } else {
                header("location: http://localhost/quiz2/login.php");
                break;
            }
            break;
        } else {
            header("location: http://localhost/quiz2/login.php");
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
                $_SESSION['username'] = $row['nama_admin'];

                // set session
                $_SESSION["login"] = true;

                header("location: http://localhost/quiz2/home.php");
                break;
            } else {
                header("location: http://localhost/quiz2/login.php");
                break;
            }
            break;
        } else {
            header("location: http://localhost/quiz2/login.php");
            break;
        }
    endforeach;
}
