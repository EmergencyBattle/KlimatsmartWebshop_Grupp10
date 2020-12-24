<?php
  // Checks whether user has pressed registration button
  if (isset($_POST['register'])) {
    // Get information from form fields
    $firstname = strtolower($_POST['firstname']);
    $lastname = strtolower($_POST['lastname']);
    $email = strtolower($_$_POST['email']);
    $password = $_POST['password'];
    // Creates query to database
    $sql = '
      INSERT INTO login (firstname, lastname, email, password, regdate)
      VALUES (:firstname, :lastname, :email, :password, NOW())';
    // Prepares the query
    $stmt = $dbh->prepare($sql);
    // Connects empty placeholders with variables
    $stmt->bindValue(':firstname', $firstname);
    $stmt->bindValue(':lastname', $lastname);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    // Checks whether query executes successfully
    if ($stmt->execute()) {
      // Logs user into the system
      $_SESSION['id'] = $dbh->lastInsertId();
      header('Location: ../../index.php');
      exit();
    }
  }
?>
