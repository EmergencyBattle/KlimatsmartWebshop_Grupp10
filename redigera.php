<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	// Opens database connection
	require_once 'assets/config/db.php';
	// Gets information from database
	require_once 'assets/functions/select-id.php';
  // Gets header design
  require_once 'assets/include/header.php';
?>

 <main class="container mt-5">
  <h5>Redigera <?php echo $row['produktnamn']; ?></h5>
  <form class="mt-4">
    <div class="form-group">
      <label for="formGroupExampleInput">Produkttitel</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Skriv din titel här">
    </div>
    <div class="form-group mt-4">
      <label for="exampleFormControlTextarea1">Produktbeskrivning</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="4000" rows="3"></textarea>
      <small id="formGroupHelpInline" class="text-muted">
      Max 300 ord.
    </small>
    </div>
    <div class="form-group col-md-1 mt-3">
      <label for="formGroupExampleInput">Pris</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
    </div>
    <div class="form-group mt-4">
      <label for="exampleFormControlFile1">Ladda upp produktbild</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-outline-dark mt-3 rounded-0 button-edit">Ladda upp ändringar</button>
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