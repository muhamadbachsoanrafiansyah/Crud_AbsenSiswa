<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crudtest";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak bisa terkoneksi ke database");
}
?>
