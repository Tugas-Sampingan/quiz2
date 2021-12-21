<?php

$conn = mysqli_connect("localhost","root","","quiz2") or die ("Koneksi gagal!");

function registrasi($data) {
	global $conn;

	$nama = $data["nama"];
	$email= strtolower(stripslashes($data["email"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	// tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES ('', '$nama', '$email', '$password')");

	//return mysqli_affected_rows($conn);

}

?>