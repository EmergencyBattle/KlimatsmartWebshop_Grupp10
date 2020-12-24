<?php
  // Checks whether submit button has been set
  if (isset($_POST['login'])) {
    // Checks whether e-mail or password are empty
    if (empty($_POST['email']) || empty($_POST['password'])) {
      // Redirect user to error page
      header('Location: ../../index.php?login=empty');
      exit();
    }
    // Trims e-mail and password
    $email = strtolower(trim($_POST['email']));
    $password = trim($_POST['password']);
    // Creates, prepares, binds and executes a query
    $sql = 'SELECT * FROM login WHERE email = :email AND password = :password';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    // Counts rows returned from database
    $count = $stmt->rowCount();
    // Checks whether user exists
    if ($count > 0) {
      // Saves results to variable
      $row = $stmt->fetch();
      // Creates session variable with user id and redirects user
      $_SESSION['uid'] = $row['uid'];
      // Redirects user to success page
      header('Location: ../../index.php');
      exit();
    } else {
      // Redirect user to error page
      header('Location: ../../index.php?login=error');
      exit();}
  }
?>
