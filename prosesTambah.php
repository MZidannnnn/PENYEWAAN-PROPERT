<?php
include 'koneksi.php';

$namaPemesanan = $_POST['namaPemesanan'];
$nomorHp = $_POST['nomorHp'];
$durasi = $_POST['durasi'];
$jenisProperti = $_POST['jenisProperti'];
$jumlahTagihan = $_POST['jumlahTagihan'];

$query = "INSERT INTO pesan(nama, nomorhp, durasi, jenis, total) VALUES ('$namaPemesanan', '$nomorHp', '$durasi', '$jenisProperti', '$jumlahTagihan')";

mysqli_query($db, $query);


if (mysqli_affected_rows($db) > 0) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = 'daftarPemesanan.php';        
    </script>";
} else {
    echo "Data Gagal Ditambahkan<br>";
    echo mysqli_error($db);
}
