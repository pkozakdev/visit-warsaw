<?php

  session_start();

  if(array_key_exists('username', $_SESSION)){
    $username = $_SESSION['username'];
    echo "<p>Hello $username</p>";
    session_unset();
    session_destroy();
  }
  header('Location: login.php');
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?>
