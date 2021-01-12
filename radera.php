<?php
  // Gets header design
  require_once 'assets/include/header.php';
?>
  <main class="container mt-5">
    <h5 class="mb-4">
      Är du säker på att du vill ta bort produkten?
    </h5>
    <button type="submit" class="btn btn-outline-dark" name="delete">
      <i class="fas fa-trash-alt mr-2"></i>Ja, radera!
    </button>
    <a href="produktsida.php" class="btn btn-outline-dark ml-4">
    <i class="fas fa-chevron-circle-left mr-2"></i>Nej, gå tillbaka!
    </a>
    
  </main>
<?php
  // Gets footer design
  require_once 'assets/include/footer.php';
?>

  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
