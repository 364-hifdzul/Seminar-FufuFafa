<?php
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

// Ambil data pendaftaran
$result = $conn->query("SELECT * FROM registration WHERE is_deleted = 0");

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
                        <a class='nav-link active' aria-current='page' href='registrasi.php'>TAMBAH PESERTA</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='admin.php'>ADMIN</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='logout.php'>LOGOUT</a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class='container mt-5'>
        <h1>Data Pendaftaran</h1>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th scope='col'>No.</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Nama</th>
                    <th scope='col'>Institusi</th>
                    <th scope='col'>Country</th>
                    <th scope='col'>Address</th>
                    <th scope='col'>Aksi</th>
                </tr>
            </thead>
            <tbody>";

if ($result) {
    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        $count = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <th scope='row'>{$count}</th>
                    <td>{$row['email']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['institution']}</td>
                    <td>{$row['country']}</td>
                    <td>{$row['address']}</td>
                    <td>
                        <a href='update.php?id={$row['id']}'>Edit
                                                </a> |
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                  </tr>";
                  $count++;
        }
    } else {
        echo "<tr><td colspan='7' class='text-center'>Tidak ada data pendaftaran.</td></tr>";
    }
} else {
    echo "<tr><td colspan='7' class='text-center'>Error dalam mengambil data: " . $conn->error . "</td></tr>";
}

echo "      </tbody>
        </table>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-...' crossorigin='anonymous'></script>
</body>
</html>";

$conn->close();


?>