<?php
include "conn.php";

$kode = $_GET['kode'];
$result = mysqli_query($conn, "DELETE FROM databarang WHERE kode_barang = '$kode'");

if ($result) {
    header("location:../katalog.php?");
}
