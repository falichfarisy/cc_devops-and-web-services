<?php
$hostname = "127.0.0.1"; // host/ip addr database
$database = "db_cloudpnm"; // nama database
$username = "root"; // user database
$port = 3306;
$password = "xrybzcbx3"; // password database
// script koneksi ke server database
$connect = mysqli_connect($hostname, $username, $password, $database, $port);
if (!$connect) {
die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}

