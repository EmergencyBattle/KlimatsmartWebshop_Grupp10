<?php
	// Opens database connection
	require_once 'assets/config/db.php';
	// Register information to database
	require_once 'assets/functions/data.insert.php';
  // Gets header design
  require_once 'assets/include/header.php';
?>

 <main class="container mt-5">
  <h5>Lägg till produkt</h5>
  <form class="mt-4" action="laddaupp.php" method="post">
    <div class="form-group">
      <label for="produktnamn">Produkttitel</label>
      <input type="text" class="form-control" name="produktnamn" placeholder="Skriv din titel här">
    </div>
    <div class="form-group mt-4">
      <label for="produktbeskrivning">Produktbeskrivning</label>
      <textarea class="form-control" name="produktbeskrivning" maxlength="4000" rows="3"></textarea>
      <small id="formGroupHelpInline" class="text-muted">
      Max 300 ord.
    </small>
    </div>
    <div class="form-group col-md-1 mt-3">
      <label for="produktpris">Pris</label>
      <input type="text" class="form-control" name="produktpris" placeholder="">
    </div>
    <!--<div class="form-group mt-4">
      <label for="produktbild">Ladda upp produktbild</label>
      <input type="file" class="form-control-file" id="produktbild">
    </div>-->
    <button type="submit" class="btn btn-outline-dark mt-3 rounded-0 button-edit" name="register">Ladda upp produkt</button>
  </form>
</main>
<?php
  // Gets footer design
  require_once 'assets/include/footer.php';
?>

  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>