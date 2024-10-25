<?php
// Mengatur variabel untuk koneksi
$host = 'localhost'; // atau '127.0.0.1'
$user = 'cpses_ovayiayl9f'; // username default MySQL di XAMPP
$pass = ''; // password default MySQL di XAMPP (kosongkan jika tidak ada)
$dbname = 'utsweb'; // nama database yang Anda buat

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
