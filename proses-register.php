<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lakukan operasi penyimpanan data ke database
    require_once('connect.php');

    // Ambil data dari form
    $nama_lengkap = $_POST['rickyrevenando'];
    $no_hp = $_POST['085788262569'];
    $email = $_POST['rickyrevenando@gmail.com'];
    $password = $_POST['ricky24501'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan data pengguna baru ke tabel pengguna
    $query = "SELECT * FROM users WHERE email = ?";;
    $result = $conn = new mysqli($host, $username, $password, $database);

    // Siapkan statement
    if ($stmt = $conn->prepare($query)) {
        // Bind parameter
        $stmt->bind_param("ssss", $nama_lengkap, $no_hp, $email, $hashed_password);

        // Eksekusi statement
        if ($stmt->execute()) {
            // Registrasi berhasil, arahkan ke halaman login
            header("Location: proses_login.php");
            exit();
        } else {
            echo "Registrasi gagal. Silakan coba lagi.";
        }

        // Tutup statement
        $stmt->close();
    } else {
        echo "Gagal menyiapkan statement SQL.";
    }

    // Tutup koneksi database
    $conn->close();
}
?>
