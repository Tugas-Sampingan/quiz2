<?php
include "conn.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$d0 = $_POST['lebar_lensa'];
$d1 = $_POST['lebar_nosepad'];
$d2 = $_POST["panjang_gagang"];
$d3 = $_POST['lebar_seluruh_lensa'];
$d4 = $_POST['tinggi_frame'];
$d5 = $_POST["material"];

$detail = $d0 . "; " . $d1 . "; " . $d2 . "; " . $d3 . "; " . $d4 . "; " . $d5;

if (isset($_POST['edit'])) {
    $dir = '../katalog/';
    $filename = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir . $filename);
    mysqli_query($conn, "UPDATE databarang SET 
        kode_barang = '$kode',
        nama_barang = '$nama',
        harga = '$harga',
        deskripsi = '$deskripsi',
        detail = '$detail', 
        gambar = '$filename'

        WHERE kode_barang = '$kode'");

    header("location: ../katalog.php");
} 
