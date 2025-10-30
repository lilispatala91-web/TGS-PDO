<?php
// Konfigurasi koneksi database
$host = "localhost";      // Server lokal
$dbname = "pdo";     // Nama database kamu
$username = "root";       // Username XAMPP (default: root)
$password = "lilispatala";           // Password XAMPP (biasanya kosong)

try {
    // Membuat koneksi menggunakan PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Atur mode error agar muncul sebagai exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Jika berhasil
    echo "Koneksi ke database berhasil!";
} catch (PDOException $e) {
    // Jika gagal
    echo "Koneksi gagal: " . $e->getMessage();
}
?>