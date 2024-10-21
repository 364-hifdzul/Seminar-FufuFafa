<?php
session_start();

include 'koneksi.php';
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = mysqli_query($conn, "SELECT * FROM user where username = '$username' and password = '$password'");
    
    $cek = mysqli_num_rows($data);
    
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin.php");
    }else {
        header("location:login.php?pesan=gagal");
    }
}


?>
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
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            background-color: #333;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">FufuFafa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid bg-dark text-light py-3">
      <header class="text-center">
        <h1 class="display-6">LOGIN ADMIN</h1>
      </header>
    </div>

    <section class="container my-2 bg-dark w-50 text-light p-2">
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" name = "login" value="Login">
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qTO6oWRDZjwlQVFaXxVnMhqzTOe5gRCDmGKPm38iu/QVAggwDIgMm+7BWwfLkN" crossorigin="anonymous"></script>
  </body>
</html>
