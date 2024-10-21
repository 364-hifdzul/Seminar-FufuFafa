<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEB SEMINAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background-image: url('gray.jpg');
            background-size: cover;
            background-position: center;
        }
        form {
            box-shadow: 2px 3px 50px #000000;
        }
        .gambar {
            width: auto;
            height: auto; 
            margin: 60px auto;
            border-style: solid;
            border-width: 10px;
            border-color: #333; 
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">FufuFafa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="registrasi.php">DAFTAR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.php">TENTANG</a>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h1 class="display-6">SELAMAT DATANG DI SEMINAR FUFUFAFA</h1>
        <h6>Sebuah Seminar Yang Dapat Menyejahterakan Rakyat Indonesia </h6>
      </header>
    </div>
 

    <section class="gambar">
      <img src="fufufafa.jpg" alt="Gambar Seminar" class="img-fluid">
      <img src="fufufafa.jpg" alt="Gambar Seminar" class="img-fluid">
      <img src="fufufafa.jpg" alt="Gambar Seminar" class="img-fluid">
      <img src="fufufafa.jpg" alt="Gambar Seminar" class="img-fluid">
      <img src="fufufafa.jpg" alt="Gambar Seminar" class="img-fluid">
      <img src="fufufafa.jpg" alt="Gambar Seminar" class="img-fluid">
    </section>

    <div class="text-center my-4">
      <a href="registrasi.php" class="btn btn-primary">Daftar Sekarang</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qTO6oWRDZjwlQVFaXxVnMhqzTOe5gRCDmGKPm38iu/QVAggwDIgMm+7BWwfLkN" crossorigin="anonymous"></script>
  </body>
</html>