<?php
$server = "localhost";
$user = "root";
$password = "";

$nama_database = "pemesanan";
$db = mysqli_connect($server, $user, $password, $nama_database);

if ($db) {
}else{
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
    
?>