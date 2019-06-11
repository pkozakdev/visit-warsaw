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

		<div id="attributions">

      <p><strong>Author details</strong>:</p>
      <p>Name: Piotr Kozak</p>
      <p>Northumbria ID: w17037425</p>
      <p>Course: MSc Computing and Information Technology with Advanced Practice</p>
      <p>Module: KF7013 Website Development and Deployment</p>
      <p>Academic year: 2017-2018</p>
      <br>
      <p><strong>Attributions:</strong></p>
      <br>
      <p>Images:</p>
      <br>
      <p>CC0 Creative Commons</p>
      <p>Free for commercial use</p>
      <p>No attribution required</p>
      <br>
      <p>Image name, address, author (File names correspond to file names in the code and asset/images/):</p>
      <br>
      <p>pic1: https://pixabay.com/en/warsaw-night-poland-city-europe-1017468/ by Skitterphoto</p>
      <p>pic2: https://pixabay.com/en/warsaw-old-town-europe-travel-1423864/ by Skitterphoto</p>
      <p>pic3: https://pixabay.com/en/poland-warsaw-night-lights-speed-2254978/ by Skitterphoto</p>
      <p>pic4: https://pixabay.com/en/stadion-national-warsaw-football-1398391/ by Arcaion</p>
      <p>pic5: https://pixabay.com/en/fountain-multimedia-warsaw-light-1423866/ by Skitterphoto</p>
      <p>background: https://pixabay.com/en/painting-watercolor-paint-paper-2407262/ by silkebr</p>
      <p>art1: https://pixabay.com/en/the-museum-the-interior-of-the-2655543/ by tevenet</p>
      <p>art2: https://pixabay.com/en/skyscraper-building-office-warsaw-2461313/ by TeroVesalainen</p>
      <p>art3: https://pixabay.com/en/metro-subway-rush-hours-1662163/ by Robert_z_Ziemi</p>
      <p>art4: https://pixabay.com/en/building-the-palace-monument-2322283/ by Pawel86</p>
      <p>art5: https://pixabay.com/en/autumn-park-yellow-foliage-spacer-1803119/ by Arcaion</p>
      <p>articlepic: https://pixabay.com/en/warsaw-nicholas-kapadia-monument-483594/ by 498813</p>
      <p>rsmall: https://pixabay.com/en/statue-sculpture-forest-warsaw-2461315/ by TeroVesalainen</p>
      <p>rsmall2: https://pixabay.com/en/building-big-city-architecture-2712464/ by ForMyKerttu</p>
      <p>map.jpg: http://www.sfmission.com/gallery_files/site_pics/Poland/Warsaw/ -</p>
      <p>Maps_and_Guides/Warsaw-Google-Map.jpg</p>
      <p>hotel1: https://pixabay.com/en/arka-hotel-skopje-2932100/ by berndmalle</p>
      <p>hotel2: https://pixabay.com/en/hotel-room-curtain-green-furniture-1979406/ by bottlein</p>
      <p>hotel3: https://pixabay.com/en/lounge-hotel-vacation-2930070/ by michaelikonya</p>
      <p>hotel4: https://pixabay.com/en/villa-interior-hotel-bedroom-1737168/ by CyprusVillas</p>
      <p>t1: https://pixabay.com/en/warsaw-filters-monuments-2441270/ by Trigger64</p>
      <p>t2: https://pixabay.com/en/warsaw-monument-poland-2825709/ by lino9999</p>
      <p>t3: https://pixabay.com/en/bathrooms-theatre-on-the-water-243009/ by Krzysiek</p>
      <p>t4: https://pixabay.com/en/wilan%C3%B3w-the-palace-warsaw-1556282/ by czu_czu_PL</p>
      <p>tr1:https://pixabay.com/en/metro-warsaw-%C5%9Bwi%C4%99tokrzyska-2286483/ by Jacek50</p>
      <p>tr2:https://pixabay.com/en/taxi-cab-taxicab-taxi-cab-new-york-238478/ by RyanMcGuire</p>
      <p>tr3:https://pixabay.com/en/tram-the-stopper-event-street-2443383/ by Neurolink</p>
      <p>tr4:https://pixabay.com/en/vw-camper-volkswagen-vw-car-336606/ by Free-Photos</p>
      <br>
      <br>
      <p>All images not listed above (logo, buttons) were created by myself using Adobe Photoshop CC <br>
        using built-in, royalty-free fonts and tools .</p>
      <br>
      <p>Software used:</p>
      <p>- Adobe Dreamweaver CC (Code view) (On university computers)</p>
      <p>- Atom (On my own MacBook)</p>
      <p>- Adobe Photoshop CC (Buttons, logo)</p>
      <p>- XAMPP (Apache, MySQL)</p>
      <p>- phpMyAdmin</p>
      <br>
      <br>
      <p>Online resources used (for educational purposes):</p>
      <p>https://w3schools.com</p>
      <p>https://developer.mozilla.org/en-US/docs/Web</p>
      <br>
      <p>Dummy text: https://www.lipsum.com/</p>
</div>
</div>
	<footer>
		<a href="../index.php"><img class="logo" src="../asset/images/logo.png" alt="logo"/></a>
		<div class="footernav">
			<ul class="footlist">
				<li><a href="contact.pho">Contact us</a></li>
				<li><a href="hotels.php">Hotels</a></li>
				<li><a href="transportation.php">Transportation</a></li>
				<li><a href="attractions.php">Attractions</a></li>
				<li><a href="booking.php">Booking</a></li>
			</ul>
		</div>
	</footer>
</body>
</html>
