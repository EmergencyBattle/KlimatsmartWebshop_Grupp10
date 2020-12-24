<?php
  // Defines information for database connection
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'codeanywhere');
  define('DB_USER', 'root');
  define('DB_PASS', 'root');
  // Connects to database
  $dbh = new PDO('
    mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',
    DB_USER,
    DB_PASS,
    array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
      PDO::MYSQL_ATTR_FOUND_ROWS => true,
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = '+01:00'"
    )
  );
?>
