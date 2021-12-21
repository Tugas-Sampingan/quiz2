<?php

$conn = mysqli_connect("localhost", "root", "", "quiz2");

if (!$conn) {
    echo "Database Tidak Dapat Terhubung!";
}
