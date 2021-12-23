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

if (isset($_SESSION['login'])) {
    header("location: http://localhost/quiz2/home.php");
    exit;
}

// if (isset($_POST["login-user"])) {
//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

//     // cek email
//     if (mysqli_num_rows($result) === 1) {

//         $row = mysqli_fetch_assoc($result);
//         if (password_verify($password, $row["password"])) {
//             // set session
//             $_SESSION["login"] = true;

//             // cek remember me
//             if (isset($_POST["remember"])) {
//                 // buat cookie
//                 setcookie('login', true, time()+60); //1 menit
//             }

//             header("location: index.php");
//             exit;
//         }
//     }

// }


if (isset($_POST['login-user'])) {
    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    // cek email
    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if (isset($_POST["remember"])) {
                // buat cookie
                setcookie('login', true, time()+60); //1 menit
            }

            header("location: http://localhost/quiz2/home.php");
            exit;
        }
    }

    // $tabel = mysqli_query($conn, "SELECT * FROM user");
    // $numRow = mysqli_num_rows($tabel);
    // foreach ($tabel as $row) :
    //     if ($row['email'] == $email) {
    //         $checkEmail = $row["email"];
    //         if ($row['password'] == $password) {
    //             $_SESSION['username'] = $row['nama_user'];

    //             // set session
    //             $_SESSION["login"] = true;
    //             // cek remember me
    //             if (isset($_POST["remember"])) {
    //                 // buat cookie
    //                 setcookie('login', true, time()+600); //10 menit
    //                 header("location: http://localhost/quiz2/home.php");
    //             }

    //             break; 
    //         } else {
    //             header("location: http://localhost/quiz2/login.php");
    //             break;
    //         }
    //         break;
    //     }
    // endforeach;
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
