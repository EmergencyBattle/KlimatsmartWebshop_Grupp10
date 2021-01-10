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
  <header class="sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggle">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggle">
        <ul class="navbar-nav mx-auto d-flex align-items-center">
          <li class="nav-item mx-4"><a href="index.php" class="nav-link">HEM</a></li>
          <li class="nav-item mx-4"><a href="produkter.php" class="nav-link active">PRODUKTER</a></li>
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
  <main class="container d-flex">
    <section>
      <ul class="product-list mt-5 pt-5">
        <h6>PRODUKTKATEGORIER</h6>
        <li>Nyheter</li>
        <li>Köksartiklar</li>
        <li>Hudvård</li>
        <li>Hygien</li>
        <li>Skönhet</li>
        <li>Hushåll</li>
      </ul>
      <ul class="sort-list pt-4">
        <h6>SORTERA EFTER</h6>
        <li><input type="checkbox" class="mr-2">Nyligen tillagd</li>
        <li><input type="checkbox" class="mr-2">Kampanj</li>
        <li><input type="checkbox" class="mr-2">Popularitet</li>
        <li><input type="checkbox" class="mr-2">Lägsta pris</li>
      </ul>
    </section>

    <section class="mt-5 pt-3">
      <h6 class="ml-5 container clearfix">
        Visar alla - 247 artiklar hittades
      </h6>
      <div class="card-deck ml-5">
        <div class="card border-0 mt-2">
          <img src="assets/images/swabbySmall.jpg" class="rounded-0  card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Återanvändbar tops</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">120 SEK</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/bambu.jpg" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Produkt 2</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">123 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/tandborste.png" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Produkt 3</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">123 kr</p>
            </div>
          </div>
        </div>
      </div>
      <div class="card-deck ml-5">
        <div class="card border-0 mt-3">
          <img src="assets/images/organicup.png" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Produkt 1</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">123 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-3">
          <img src="assets/images/pads.jpg" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Produkt 2</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">123 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-3">
          <img src="assets/images/metalstraw.jpg" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Produkt 3</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">123 kr</p>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center ml-5">
       <a class="btn btn-secondary btn-sm mt-3 button-view-more rounded-0" href="#" role="button">Visa fler</a>
      </div>
    </section>

  </main>
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
