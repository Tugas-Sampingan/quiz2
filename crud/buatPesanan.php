<?php
include "conn.php";

$nama = $_POST["nama"];
$email = $_POST["email"];
$no_telp = $_POST["no_telp"];
$alamat = $_POST["address"];
$tipe = explode("; ", $_POST["tipe_barang"]);
$jumlah = $_POST["jumlah"];
$creditCard = $_POST["payment"];

if (isset($_POST['pesan'])) {
    mysqli_query($conn, "INSERT INTO pemesanan VALUES('','$nama','$email','$no_telp','$alamat','$tipe[0]','$tipe[1]','$jumlah','$creditCard')");
    header("location: ../buy.php");
}
