<?php
include "conn.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];




$checkEmail;

//ntar kasih section supaya tau mana admin mana user
if (isset($_POST['login-user'])) {
    $tabel = mysqli_query($conn, "SELECT * FROM user");
    $numRow = mysqli_num_rows($tabel);
    foreach ($tabel as $row) :
        if ($row['email'] == $email) {
            $checkEmail = $row["email"];
            if ($row['password'] == $password) {
                $_SESSION['username'] = $row['nama_user'];
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
