<?php
  include 'connect.php';

  session_start();

  if(array_key_exists('username', $_SESSION)){
    $username = $_SESSION['username'];
    header('Location: ../index.php');
  }
  else{
    header('Location: login.php');
  }
  echo "<br>" . "<a href='logout.php'><p>Log out</p></a>";
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?>
