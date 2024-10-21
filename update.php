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

    // Ambil data pendaftaran berdasarkan ID
    $stmt = $conn->prepare("SELECT * FROM registration WHERE id = ? AND is_deleted = 0");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if (!$data) {
        die("Data tidak ditemukan.");
    }
} else {
    die("ID tidak valid.");
}

// Proses update data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $institution = $_POST['institution'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    // Update data ke database
    $stmt = $conn->prepare("UPDATE registration SET email = ?, name = ?, institution = ?, country = ?, address = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $email, $name, $institution, $country, $address, $id);

    if ($stmt->execute()) {
        header("Location: admin.php"); // Redirect ke halaman admin setelah sukses
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Update Pendaftaran</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="institution" class="form-label">Institusi</label>
                <input type="text" class="form-control" id="institution" name="institution" value="<?php echo $data['institution']; ?>" required>
            </div>
            <div class="col-12">
          <label for="country" class="form-label">Negara</label>
          <select class="form-select" id="country" name="country" required>
            <option value="" selected disabled>Pilih Negara</option>
            <option value="indonesia">Indonesia</option>
            <option value="singapore">Singapore</option>
            <option value="malaysia">Malaysia </option>
            <option value="usa">USA</option>
            <option value="philiphine">Philiphine</option>
            <option value="cambodia">Cambodia </option>
            <option value="laos">Laos </option>
            <option value="thailand">Thailand </option>
            <option value="australia">Australia </option>
            <option value="vietnam">Vietnam </option>
          </select>
        </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $data['address']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>