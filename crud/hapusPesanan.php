<?php
include "conn.php";

$kode = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM pemesanan WHERE id = '$kode'");

if ($result) {
    header("location:../buy.php");
}
