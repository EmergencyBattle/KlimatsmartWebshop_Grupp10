<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	// Opens database connection
	require_once 'assets/config/db.php';
	// Gets information from database
	require_once 'assets/functions/data.select.php';
  // Gets header design
  require_once 'assets/include/header.php';
?>

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
      
      
      <div class="d-flex">
        <h6 class="ml-5 container clearfix">
          Visar alla - 247 artiklar hittades
        </h6>
        <a class="btn btn-outline-dark mt-3 rounded-0 button-add-products" href="laddaupp.php" role="button">Lägg till ny produkt</a>
      </div>
      <div class="card-deck ml-5">
	
				<?php
					// Checks whether database is empty
					if ($stmt->rowCount() > 0) {
						// Gets students from database
						while ($row = $stmt->fetch()) {
							// Prints out products to HTML /// BYT TEST.PHP TILL PRODUKTSIDA.PHP!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
							echo '
								<div class="card border-0 mt-2">
									<a href="produktsida.php?id='.$row['id'].'">
										<img src="assets/images/swabbySmall.jpg" class="rounded-0  card-img-top" alt="...">
											<div class="card-body">
												<h6 class="card-title mt-n3 ml-n3">'.$row['produktnamn'].'</h6>
												<div class="d-flex justify-content-between">
													<p class="card-text mt-n2 ml-n3">'.$row['produktpris'].' SEK</p>
												</div>
											</div>
									</a>
								</div>
							';
						}
					} else {
						echo ' 
						inget innehåll finns
						';	
					}
				?>
					</div>
				</div>
				<div class="d-flex justify-content-center ml-5">
				 <a class="btn btn-secondary btn-sm mt-3 button-view-more rounded-0" href="#" role="button">Visa fler</a>  
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

