
<?php
include 'connect.php';
session_start();
if(array_key_exists('username', $_SESSION)){
  header('Location: loggedin.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
}

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="../asset/css/styling.css">
	<title>visitWarsaw</title>
</head>
<body background="../asset/images/background.jpg">
	<header>
		<a href="#"><img class="logo" src="../asset/images/logo.png" alt="logo"/></a>
	</header>
	<div class="nav">
		<ul class="navbar">
			<li><a href="#" id="nbleft">Home</a></li>
			<li><a href="#">Hotels</a></li>
			<li><a href="#">Transportation</a></li>
			<li><a href="#">Attractions</a></li>
			<li><a href="#" id="nbright">Booking</a></li>
		</ul>
	</div>


	<div class="contentalt">
	<div class="lefthandside" >
		<div class="bookingmenu">

      <h1>Log in</h1>
      <h3>Registered user access only</h3>
      <br />
      <br />

        <form id="Login" method="post"
          action="dologin.php">

          Username <br />
          <input type="text" name="username" />
          <br />
          <br />
          Password<br />
          <input type="password" name="password" />
          <br />
          <br />
          <input type="submit" value="Log in" />
        </form>
        <br>
          <h2>or <a href="register.php">register a new account</a></h2>
      </div>
</div>
</div>

</body>
</html>
