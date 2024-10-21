<?php
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
echo "<!doctype html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>WEB SEMINAR</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background-image: url('gray.jpg');
            background-size: cover; /* Menyesuaikan ukuran gambar */
            background-position: center; /* Memusatkan gambar */
        }
        form {
            box-shadow: 2px 3px 50px #000000;
        }
    </style>
</head>
<body>
    <nav class='navbar navbar-expand-lg bg-body-tertiary'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='#'>FufuFafa</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='registrasi.php'>BERANDA</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='tentang.php'>TENTANG</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='login.php'>ADMIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-...' crossorigin='anonymous'></script>
</body>
</html>";
// Ambil data dari form
$email = $_POST['email'];
$name = $_POST['name'];
$institution = $_POST['institution'];
$country = $_POST['country'];
$address = $_POST['address'];

// Siapkan dan jalankan query
$stmt = $conn->prepare("INSERT INTO registration (email, name, institution, country, address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $email, $name, $institution, $country, $address);

if ($stmt->execute()) {
    // Tampilkan pesan sukses
    echo "<div class='alert alert-success'>Data berhasil disimpan.</div>";
} else {
    // Tampilkan pesan error
    echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
}

// Tutup koneksi
$stmt->close();
$conn->close();

// Tampilkan halaman utama

?>