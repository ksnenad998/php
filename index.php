<?php
  include "phpvendors/services/init.php";

  $user_class = new USER();

  if (!$user_class->logged_in()){
    $user_class->redirect('register.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ResivoJe</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 col-lg-6 col-md-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="assets/images/logohd.png" alt="logo" class="logo">
            <h3>RešivoJe</h3>
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Prijavi se</h1>
            <form action="#!">
              <div class="form-group">
                <label for="username">Korisničko ime</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Unesite korisničko ime">
              </div>
              <div class="form-group mb-4">
                <label for="password">Lozinka</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Unesite lozinku">
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="button" value="Login">
            </form>
            <a href="#!" class="forgot-password-link">Zaboravili ste lozinku?</a>
            <p class="login-wrapper-footer-text">Nemaš profil? <a href="register.php" class="text-reset">Registruj se</a></p>
          </div>
        </div>
        <div class="col-sm-7 col-lg-6 col-md-6 px-0 d-none d-sm-block justify-content-center">
          <img src="assets/images/4.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script src="assets/js/login.js"></script>
</body>
</html>
