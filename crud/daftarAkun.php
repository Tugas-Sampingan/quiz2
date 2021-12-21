<?php
include "conn.php";

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

if (isset($_POST['daftar'])) {
    mysqli_query($conn, "INSERT INTO user VALUES('','$nama','$email','$password')");
    echo $_POST['daftar'];
    header("location: http://localhost/quiz2");
}
