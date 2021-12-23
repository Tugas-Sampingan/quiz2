<?php
include "conn.php";

$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["address"];
$tipe = $_POST["tipe_barang"];
$jumlah = $_POST["jumlah"];
$creditCard = $_POST["payment"];

if (isset($_POST['pesan'])) {
    mysqli_query($conn, "INSERT INTO pemesanan VALUES('','$nama','$email','$alamat','$tipe','$jumlah','$creditCard')");
    header("location: ../buy.php");
}
