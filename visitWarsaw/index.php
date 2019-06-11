<?php
include 'content/connect.php';
session_start();
if(!array_key_exists('username', $_SESSION)){
  header('Location: content/login.php');}
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="asset/css/styling.css">
	<title>visitWarsaw</title>
</head>
<body background="asset/images/background.jpg">
	<header>
		<a href="#"><img class="logo" src="asset/images/logo.png" alt="logo"/></a>
		<a href="content/contact.php"><h3 class="contactushead">Contact us!</h3></a>
		<div class="hellologout">
		<?php
		  $username = $_SESSION['username'];
		  echo "<p>Hello, $username</p>  " . "<a href='content/logout.php'><p>Log out</p></a>";
    ?>
	 </div>
	</header>
	<div class="nav">
		<ul class="navbar">
			<li><a href="#" id="nbleft">Home</a></li>
			<li><a href="content/hotels.php">Hotels</a></li>
			<li><a href="content/transportation.php">Transportation</a></li>
			<li><a href="content/attractions.php">Attractions</a></li>
			<li><a href="content/booking.php" id="nbright">Booking</a></li>
		</ul>
	</div>
	<div>
		<div class="slide">
			<a href="content/article.php"><img class="slidepic" src="asset/images/pic 3.jpg" alt="Warsaw city centre"></a>
			<a href="content/article.php"><img class="slidepic" src="asset/images/pic 2.jpg" alt="Old buildings"></a>
			<a href="content/article.php"><img class="slidepic" src="asset/images/pic 4.jpg" alt="National Stadium"></a>
			<a href="content/article.php"><img class="slidepic" src="asset/images/pic 5.jpg" alt="Fountain"></a>
		</div>
	<script>
		var slideIndex = 0;
		carousel();

		function carousel() {
			var i;
    	var x = document.getElementsByClassName("slidepic");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > x.length) {slideIndex = 1}
			x[slideIndex-1].style.display = "block";
			setTimeout(carousel, 4000);
		}
	</script>
	</div>
	<div class="content">
		<div class="mainart">
			<a href="content/article.php"><img src="asset/images/art1.jpg" class="artpic" alt="National library"></a>
			<div class="artdesc">
				<h2>Warsaw Museum</h2>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blandiducimus qui blanditiis
          praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
          occaecati cupiditate non provident, similiquemolestias excepturi sint occaecati cupiditate non
          provident, similiquemolestias excepturi sint occaecati cupiditate </p>
			</div>
		</div>
		<div class="smalladd">
			<a href="content/booking.php"><img id="add" src="asset/images/bookwithus.png" alt="Book with us"></a>
		</div>
		<div class="bigadd">
			<a href="content/attractions.php"><img id="bgadd" src="asset/images/art4.jpg" alt="Lazienki palace"></a>
		</div>
		<div class="rightside">
			<a href="content/article.php"><img id="smallp" src="asset/images/art5.jpg" alt="Autumn tree"></a>
			<p id="longdesc">
				"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
         deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
          similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum
           quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
            quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia
            deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
            distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
			</p>
		</div>
		<div class="mainart">
			<a href="content/article.php"><img src="asset/images/art2.jpg" class="artpic" alt="skyscrappers">
			</a>
			<div class="artdesc">
				<h2>City Centre</h2>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blandiducimus qui blanditiis praesentium
          voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
          provident, similiquemolestias excepturi sint occaecati cupiditate non provident, similiquemolestias excepturi
          sint occaecati cupiditate </p>
			</div>
		</div>
		<div class="mainart">
			<a href="content/article.php"><img src="asset/images/art3.jpg" class="artpic" alt="metro">
			</a>
			<div class="artdesc">
				<h2>Metro system</h2>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blandiducimus qui blanditiis praesentium
          voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
           provident, similiquemolestias excepturi sint occaecati cupiditate non provident, similiquemolestias excepturi
           sint occaecati cupiditate </p>
			</div>
		</div>
	</div>
	<footer>
		<a href="#"><img class="logo" src="asset/images/logo.png" alt="logo"/></a>
		<div class="footernav">
			<ul class="footlist">
				<li><a href="content/contact.php">Contact us</a></li>
				<li><a href="content/hotels.php">Hotels</a></li>
				<li><a href="content/transportation.php">Transportation</a></li>
				<li><a href="content/attractions.php">Attractions</a></li>
				<li><a href="content/booking.php">Booking</a></li>
			</ul>
		</div>
    <a href="content/attributions.php"><h3 class="contactushead" id="attributionsbutton">Author and Attributions</h3></a>
	</footer>
</body>
</html>
