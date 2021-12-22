<?php
include "conn.php";


$email = $_POST["email"];
$password = $_POST["password"];

echo $_POST['login-user'];

$tabel = mysqli_query($conn, "SELECT * FROM user");
$numRow = mysqli_num_rows($tabel);

$checkEmail;

//ntar kasih section supaya tau mana admin mana user
if (isset($_POST['login-user'])) {
    foreach ($tabel as $row) :
        if ($row['email'] == $email) {
            $checkEmail = $row["email"];
            if ($row['password'] == $password) {
                header("location: http://localhost/quiz2");
                break;
            } else {
                header("location: http://localhost/quiz2/login.php");
            }
            break;
        }
    endforeach;
} else if (isset($_POST['login-admin'])) {
    foreach ($tabel as $row) :
        if ($row['email'] == $email) {
            $checkEmail = $row["email"];
            if ($row['password'] == $password) {
                header("location: http://localhost/quiz2");
                break;
            } else {
                header("location: http://localhost/quiz2/login.php");
            }
            break;
        }
    endforeach;
}
