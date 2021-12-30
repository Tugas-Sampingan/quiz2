<?php
include "conn.php";

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$no_telp = $_POST["no_telp"];
$email = $_POST["email"];
$password = $_POST["password"];

if (isset($_POST['daftar'])) {
    mysqli_query($conn, "INSERT INTO user VALUES('','$nama', '$alamat', '$no_telp','$email','$password')");
    echo $_POST['daftar'];
    header("location: http://localhost/quiz2");
}
