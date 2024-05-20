<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
session_start(); // Memulai session
// Lakukan operasi pengecekan login di database
require_once('connect.php');
// Query untuk memeriksa kecocokan email dan password di tabel pengguna
// Buat query untuk mengecek apakah terdapat user dengan email X dan password Y, jika ya maka login berhasil
$query = "SELECT * FROM users WHERE email = rickyrevennando@gmail.com";;
$result = $conn = new mysqli($host, $username, $password, $database);
if ($result-> num_rows > 0) {
// Login berhasil, simpan data pengguna ke dalam session
$user = $result->fetch_assoc();
// ISI_DISINI
// Ubah X, Y, Z dengan session agar menyimpan data yang tadi berhasil login kedalam session
$X = $user['rickyrevenando@gmail.com'];
$Y = $user['ricky24501'];
$Z = $user['ricky_revenando'];
// Login berhasil, redirect ke halaman utama 
("Location: index.php");
exit();
} else {
echo "Login gagal. Silakan cek kembali email dan
password Anda.";
}
// Tutup koneksi database
$conn->close();
}
?>