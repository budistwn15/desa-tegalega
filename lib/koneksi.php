<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "tegalega";

$koneksi = mysqli_connect($host, $user, $pass, $name);
if ($koneksi) {
    echo "Berhasil";
}
