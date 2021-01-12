<?php
  // Gets header design
  require_once 'assets/include/header.php';
?>
  <main> 
    <!--===========================
    CAROUSEL
    ============================-->
    <section id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <section class="carousel-item active">
          <img src="assets/images/karusellEtt.png" class="d-block w-100" alt="...">
          <div class="carousel-caption mx-auto">
            <p>HOS OSS KAN DU UPPLEVA</p>
            <h5>KLIMATSMART SHOPPING</h5>
            <a class="btn btn-outline-dark mt-3" href="produkter.php" role="button">BÖRJA SHOPPA</a>
          </div>
        </section>
        <section class="carousel-item">
          <img src="assets/images/karusell2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption mx-auto ruta2">
           <p class="carousel2">För att hjälpa dig sänka ditt klimatavtryck är 100% av våra produkter producerade i Sverige. Från företag till dörr med så kort transportsträcka som möjligt.</p>
          </div>
        </section>
        <section class="carousel-item">
          <img src="https://unsplash.it/1000/300/?random" class="d-block w-100" alt="...">
          <div class="carousel-caption mx-auto">
            <h5>rubrik</h5>
            <p>text</p>
          </div>
        </section>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    
    
    <!-- CARDS NEW PRODUCTS -->
    <section class="container mt-5">
      <h5 class="mb-3">Nyheter</h5>
      <div class="card-deck">
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
          <img src="assets/images/metalstraw.jpg" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Ihopfällbart metallsugrör</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">80 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/pads.jpg" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Tvättbara bomullsrondeller</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">65 kr</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container clearfix">
        <a class="btn btn-secondary btn-sm mt-3 button-products rounded-0" href="produkter.php" role="button">Se alla nyheter</a>
      </div>
    </section>
    <!-- CARDS POPULAR PRODUCTS -->
    <section class="container mt-5">
      <h5 class="mb-3">Populära produkter</h5>
      <div class="card-deck">
        <div class="card border-0 mt-2">
          <a href="produktsida.php"><img src="assets/images/swabbySmall.jpg" class="rounded-0  card-img-top" alt="..."></a>
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Återanvändbar tops</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">120 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/bambu.jpg" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Bambusugrör - Flerpack</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">80 kr</p>
            </div>
          </div>
        </div>
        <div class="card border-0 mt-2">
          <img src="assets/images/tandborste.png" class="rounded-0 card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title mt-n3 ml-n3">Bambutandborste - Rosa</h6>
            <div class="d-flex justify-content-between">
              <p class="card-text mt-n2 ml-n3">45 kr</p>
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
      <div class="container clearfix">
       <a class="btn btn-secondary btn-sm mt-3 button-products rounded-0" href="produkter.php" role="button">Se alla produkter</a>
      </div>
    </section>
  </main>
<?php
  // Gets footer design
  require_once 'assets/include/footer.php';
?>

  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>