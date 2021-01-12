<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Webbutik</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Font-awesome Core CSS -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- Custome Styles -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- HEADER -->
  <header class="sticky-top">
    <nav class="navbar navbar-expand-md navbar-light"> 
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggle">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggle">
        <ul class="navbar-nav mx-auto d-flex align-items-center">
          <li class="nav-item mx-4"><a href="index.php" class="nav-link">HEM</a></li>
          <li class="nav-item mx-4"><a href="produkter.php" class="nav-link">PRODUKTER</a></li>
          <li class="nav-item mx-4"><a href="kontakt.php" class="nav-link">KONTAKT</a></li>
          <img src="assets/images/Logotyp.png" class="logotype" alt="...">
          <li class="nav-item mx-4"><a href="kassa.php" class="nav-link">KASSA</a></li>
         
          <li class="nav-item mx-4 dropdown"><a href="#" class="nav-link dropdown-toggle" id="login" data-toggle="dropdown">LOGGA IN</a>
            <form action="#" method="post" class="dropdown-menu dropdown-menu-right p-4">
              <div class="form-group">
                <label for="email" class="sr-only">E-postadress</label>
                <input type="email" class="form-control" name="email" placeholder="E-postadress">
              </div>
              
              <div class="form-group">
                <label for="password" class="sr-only">Lösenord</label>
                <input type="password" class="form-control" name="password" placeholder="Lösenord">
              </div>
              <button type="submit" class="btn btn-outline-dark btn-block" name="login">Logga in</button>
            </form>
          </li>
          
          <li class="nav-item mx-4 d-flex align-items-center search"><a href="#" class="nav-link">SÖK...</a></li>
        </ul>
      </div>
      </div>
    </nav>
  </header>