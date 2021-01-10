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
          <li class="nav-item mx-4"><a href="index.php" class="nav-link active">HEM</a></li>
          <li class="nav-item mx-4"><a href="produkter.php" class="nav-link">PRODUKTER</a></li>
          <li class="nav-item mx-4"><a href="#" class="nav-link">KONTAKT</a></li>
          <img src="assets/images/Logotyp.png" class="logotype" alt="...">
          <li class="nav-item mx-4"><a href="#" class="nav-link">KASSA</a></li>
          <li class="nav-item mx-4"><a href="#" class="nav-link">LOGGA IN</a></li>
          <li class="nav-item mx-4 d-flex align-items-center search"><a href="#" class="nav-link">SÖK...</a></li>
        </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="container mt-5">
    <div class="d-flex">
      <section class="w-50">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/swabby.jpeg" class=" w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://unsplash.it/250/250/?random" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://unsplash.it/250/250/?random" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
      <section class="w-50 ml-5">
        <h5>Återanvändbar tops <br> 120.00 SEK</h5>
        <p class="mt-3">LastSwab är ett återanvändbart, klimatsmart alternativ till bomullstops.<br>
          <br>
          LastSwab kommer i två varianter - standard och make-up. <br>
          Standard används för att rengöra öronen medan make-up är din <br>
          partner in crime vid bland annat eyelinerapplikation!<br>
          <br>
          Det medföljande fodralet är majsbaserat och därmed nedbrytbart.<br>
          Den nätta designen gör att LastSwab är mycket resevänlig.<br>
          <br>
          En LastSwab håller i upp till 1000 användningar och hjälper till att <br>
          bekämpa de stora mängderna plast som hittas i haven efter <br>
          engångsprodukter likt tops.<br>
          <br>
          Rengörs enkelt med tvål och vatten.
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
              <p class="card-text mt-n2 ml-n3">65 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/tandborste.png" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Bambutandborste med fodral</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">85 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/kasse.jpg" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Återanvändbar fruktpåse</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">120 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/organicup.png" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">OrganiCup Menskopp - Vit</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">150 kr</p>
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
