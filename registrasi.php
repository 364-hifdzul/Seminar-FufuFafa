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
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h1 class="display-6">SILAHKAN MENGISI DATA</h1>
      </header>
    </div>

    <section class="container my-2 bg-dark w-50 text-light p-2">
      <form class="row g-3" action="proses_registrasi.php" method="POST">
        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-12">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="col-12">
          <label for="institution" class="form-label">Institusi</label>
          <input type="text" class="form-control" id="institution" name="institution" required>
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
        <div class="col-12">
      <label for="address class="form-label">Alamat</label>
      <input type="text" class="form-control" name="address" placeholder="Gg. Mawar, Godean">
      </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
      </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qTO6oWRDZjwlQVFaXxVnMhqzTOe5gRCDmGKPm38iu/QVAggwDIgMm+7BWwfLkN" crossorigin="anonymous"></script>
  </body>
</html>