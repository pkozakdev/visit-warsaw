<?php
include 'connect.php';
session_start();
$user = htmlspecialchars($_POST["username"]);
$pwd =  htmlspecialchars($_POST["password"]);
$pass = SHA1($pwd);
  global $con;
  $sql = "SELECT username, password_hash from customers where username= '$user' AND password_hash='$pass'";
  $check=mysqli_query($con, $sql);

  if (mysqli_num_rows($check)>0){
    $_SESSION['username'] = $user;
    header('Location: loggedin.php');
  }
  else{
    header('Location: login.php');
  }
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?>
