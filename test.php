<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	// Opens database connection
	require_once 'assets/config/db.php';
	// Gets information from database
	require_once 'assets/functions/select-id.php';
?>

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
	
	
<main class="container mt-5">
	<section class="knappar mb-2">
		<a class="btn btn-outline-dark mt-3 rounded-0 button-edit" href="redigera.php" role="button"><i class="fas fa-pencil-alt mr-2"></i> Redigera produkt </a>
		<a class="btn btn-outline-dark mt-3 rounded-0 button-delete" href="..." role="button"><i class="far fa-trash-alt mr-2"></i> Ta bort produkt </a>
	</section>
	<div class="d-flex">
		<section class="w-50">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/images/swabby.jpeg" class=" w-100 produktbild" alt="produktbild 1">
					</div>
					<div class="carousel-item">
						<img src="https://unsplash.it/250/250/?random" class="d-block w-100" alt="produktbild 2">
					</div>
					<div class="carousel-item">
						<img src="https://unsplash.it/250/250/?random" class="d-block w-100" alt="produktbild 3">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Föregående</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Nästa</span>
				</a>
			</div>
		</section>
		<section class="w-50 ml-5">
			
			
			
			<h5 class="produkttitel"><?php echo $row['produktnamn']; ?></h5> 
			<h5 class="pris"><span class="produktpris"><?php echo $row['produktpris']; ?></span> KR</h5>
			<p class="mt-3 produktbeskrivning"><?php echo $row['produktbeskrivning']; ?>
			</p>
			<h6 class="mt-3">Välj färg</h6>
			<a class="btn btn-outline-dark mt-5 rounded-0" href="produkter.php" role="button">LÄGG I VARUKORG</a>
		</section>
	</div>
  
    <!-- CARDS SIMILAR PRODUCTS -->
    <section class="container mt-5">
      <h5 class="mb-3">Liknande produkter</h5>
      <div class="card-deck">
        <div class="card border-0 mt-2">
          <img src="assets/images/pads.jpg" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Tvättbara bomullsrondeller</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">65kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/tandborste.png" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Bambutandborste med fodral</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">85kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/kasse.jpg" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Återanvändbar fruktpåse</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">120kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/organicup.png" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">OrganiCup Menskopp - Vit</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">150kr</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  
  
  </main>
  <!-- FOOTER -->
  <footer class="mt-5">
    <div class="container d-flex justify-content-between pt-3">
      <section>
        <ul class="footer-links">
          <h6>HJÄLP</h6>
          <li>Betalning</li>
          <li>Leverans och retur</li>
          <li>Spåra beställning</li>
          <li>Vanliga frågor</li>
        </ul>
      </section>
      <section>
        <ul class="footer-links">
          <h6>PRESENTKORT &amp; RABATT</h6>
          <li>Frågor om presentkort</li>
          <li>Köp presentkort</li>
          <li>Studentrabatt</li>
        </ul>
      </section>
      <section>
        <h6>FÖLJ RETERNAL</h6>
        <p class="text-right">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-pinterest-p"></i>
          <i class="fab fa-twitter"></i>
        </p>
      </section>
    </div>
  </footer>

  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>