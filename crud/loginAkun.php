<?php
include "conn.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];
$terdaftar = false;
$checkEmail;

if (isset($_POST['login-user'])) {
    $tabel = mysqli_query($conn, "SELECT * FROM user where email = '$email'");
    $row = mysqli_fetch_array($tabel);
    echo $row;
    foreach ($tabel as $row) :
        if ($row['email'] == $email) {
            $checkEmail = $row["email"];
            if ($row['password'] == $password) {
                $_SESSION['username'] = $row['nama_user'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['alamat'] = $row['alamat'];
                $_SESSION['no_telp'] = $row['no_telp'];

                $terdaftar = true;
                $_SESSION['login'] == true;
                setcookie('login', 'true');

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

                $_SESSION['login'] == true;
                setcookie('login', 'true');

                $terdaftar = true;
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
if ($terdaftar == false){
    header("location: http://localhost/quiz2/login.php");
}