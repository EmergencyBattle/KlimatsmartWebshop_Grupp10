<?php
  // Logs out user from system
  session_start();
  session_destroy();
  header('Location: index.php');
  exit();
?>
