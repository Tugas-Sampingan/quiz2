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

$detail = $d0.$d1.$d2.$d3.$d4.$d5;

$gambar = $_FILES['foto']['name'];

$query = "UPDATE buku_table SET 
    kode_barang = '$kode',
    nama_barang = '$nama',
    harga = '$harga',
    deskripsi = '$deskripsi',
    detail = '$detail',
    gambar = '$gambar',

    WHERE kode_barang = '$kode'
";
$result = mysqli_query($conn, $query);
if ($result) {
    header("location:../katalog.php");
}