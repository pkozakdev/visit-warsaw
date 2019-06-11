<?php
include 'connect.php';
session_start();
if(!array_key_exists('username', $_SESSION)){
  header('Location: login.php');}
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
		<a href="../index.php"><img class="logo" src="../asset/images/logo.png" alt="logo"/></a>
		<a href="contact.php"><h3 class="contactushead">Contact us!</h3></a>
    <div class="hellologout">
		<?php
		  $username = $_SESSION['username'];
		  echo "<p>Hello, $username</p>  " . "<a href='logout.php'><p>Log out</p></a>";
    ?>
	 </div>
	</header>
	<div class="nav">
		<ul class="navbar">
			<li><a href="../index.php" id="nbleft">Home</a></li>
			<li><a href="hotels.php">Hotels</a></li>
			<li><a href="transportation.php">Transportation</a></li>
			<li><a href="attractions.php">Attractions</a></li>
			<li><a href="booking.php" id="nbright">Booking</a></li>
		</ul>
	</div>

	<div class="contentalt">
	<div class="lefthandside">
		<div id="contact">
			<h3>Contact number: 07777 777 777</h3>
			<br>
			<br>
			<h3>How to find us:</h3>
			<br>
			<img src="../asset/images/map.jpg" alt="map">
			<br>
			<br>
			<br>
			<h3>Opening times:</h3>
			<br>
			<p>Monday: 7:00 - 16:00</p>
			<br>
			<p>Tuesday: 7:00 - 16:00</p>
			<br>
			<p>Wednesday: 7:00 - 16:00</p>
			<br>
			<p>Thursday: 7:00 - 16:00</p>
			<br>
			<p>Friday: 7:00 - 14:00</p>
			<br>
			<p>Saturday: 9:00 - 13:00</p>
			<br>
			<p>Sunday: Closed</p>
			<br>
		</div>

	</div>
	<div class="righthandside">
		<div class="smallbox">
			<a href="booking.php"><img id="bookwithuslarge" src="../asset/images/bookwithuslarge.png" alt="book with us"></a>
		</div>
		<div class="smallbox">
			<a href="article.php"><img class="rsmall" src="../asset/images/rsmall.jpg" alt="statue"></a>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint et quas molestias excepturi sintet quas molestias excepturi sint</p>
		</div>
		<div class="largebox">
			<h1 id="quicklinkshead">Quick links:</h1>
			<a href="../index.php"><img class="quicklink" src="../asset/images/home.png" alt="home"></a>
			<a href="hotels.php"><img class="quicklink" src="../asset/images/hotels.png" alt="hotels"></a>
			<a href="transportation.php"><img class="quicklink" src="../asset/images/transportation.png" alt="transport"></a>
			<a href="attractions.php"><img class="quicklink" src="../asset/images/attractions.png" alt="attractions"></a>
			<a href="booking.php"><img class="quicklink" src="../asset/images/booking.png" alt="booking"></a>
		</div>
		<div class="smallbox">
			<a href="attractions.php"><img class="rsmall" src="../asset/images/rsmall2.jpg" alt="glass shopping centre"></a>
			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint et quas molestias excepturi sintet quas molestias excepturi sint</p>
		</div>
	</div>
	</div>
	<footer>
		<a href="../index.php"><img class="logo" src="../asset/images/logo.png" alt="logo"/></a>
		<div class="footernav">
			<ul class="footlist">
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="hotels.php">Hotels</a></li>
				<li><a href="transportation.php">Transportation</a></li>
				<li><a href="attractions.php">Attractions</a></li>
				<li><a href="booking.php">Booking</a></li>
			</ul>
		</div>
    <a href="attributions.php"><h3 class="contactushead" id="attributionsbutton">Author and Attributions</h3></a>
	</footer>
</body>
</html>
