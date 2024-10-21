<?php
session_start();

// Konfigurasi database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "seminar"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah ID ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Update status is_deleted menjadi 1
    $stmt = $conn->prepare("UPDATE registration SET is_deleted = 1 WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: admin.php"); // Redirect ke halaman admin setelah sukses
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    die("ID tidak valid.");
}

$stmt->close();
$conn->close();
?>