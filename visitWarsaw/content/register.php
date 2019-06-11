
<?php
include 'connect.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
	<div class="lefthandside">
		<div class="bookingmenu">

<h2>Register a new user account:</h2>
<br />
<br />

      <form id="Registration" method="get"
         action="registered.php">
      Username <br />
      <input type="text" name="username" />
      <br />
      <br />
      Password <br />
      <input type="password" name="password" />
      <br />
      <br />
      Name <br />
      <input type="text" name="firstname" />
      <br />
      <br />
      Family name<br />
      <input type="text" name="lastname" />
      <br />
      <br />
      Postcode <br />
      <input type="text" name="postcode" />
      <br />
      <br />
      Address <br />
      <input type="text" name="address1" />
      <br />
      <input type="text" name="address2" />
      <br />
      <br />
      Date of birth (YYYY-MM-DD) <br />
      <input type="text" name="dob" />
      <br />
      <br />
      <input type="submit" value="Submit" />
      </form>
      <br>
      <h2>or <a href="login.php">go back</a></h2>


</body>
</html>
