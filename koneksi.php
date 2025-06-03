<?php
$host = "localhost"; // Ganti dengan host database Anda
$dbname = "manajemen_makanan"; // Ganti dengan nama database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda (kosong jika tidak ada)

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Koneksi Berhasil"; // Untuk testing koneksi
} catch(PDOException $e) {
    echo "Koneksi Gagal: " . $e->getMessage();
}
?>