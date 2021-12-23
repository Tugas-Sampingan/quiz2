<?php
include "conn.php";


$kode = strtoupper($_POST['kode']);
$nama = strtoupper($_POST['nama']);
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$d0 = $_POST['lebar_lensa'];
$d1 = $_POST['lebar_nosepad'];
$d2 = $_POST["panjang_gagang"];
$d3 = $_POST['lebar_seluruh_lensa'];
$d4 = $_POST['tinggi_frame'];
$d5 = $_POST["material"];

$detail = $d0."; ".$d1."; ".$d2."; ".$d3."; ".$d4."; ".$d5;

if (isset($_POST['simpan'])) {
    $dir = 'buku/';
    $filename = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir . $filename);
    mysqli_query($conn, "INSERT INTO databarang VALUES('$kode', '$nama', '$harga', '$deskripsi', '$detail', '$filename')");

    header("location: ../katalog.php?");
} 