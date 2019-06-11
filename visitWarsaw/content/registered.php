
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
<?php
  $user = $_GET['username'];
  $regpass = $_GET['password'];
  $name = $_GET['firstname'];
  $lastname = $_GET['lastname'];
  $post = $_GET['postcode'];
  $address1 = $_GET['address1'];
  $address2 = $_GET['address2'];
  $dob = $_GET['dob'];
  $min_length = 3;
  $user = htmlspecialchars($user);
  $name = htmlspecialchars($name);
  $lastname = htmlspecialchars($lastname);
  $address1 = htmlspecialchars($address1);
  $address2 = htmlspecialchars($address2);
  $regpassword = SHA1($regpass);
  $sql = "INSERT INTO customers (username,	password_hash,	customer_forename,
    customer_surname,	customer_postcode,	customer_address1,	customer_address2,
  	date_of_birth)
    VALUES ('$user', '$regpassword', '$name', '$lastname', '$post', '$address1',
    '$address2', '$dob')";
  if(strlen($user) >= $min_length && strlen($regpass) >= $min_length) {
  if ($con->query($sql) === TRUE){
    echo "User succesfully registered";
  $id = mysqli_insert_id($con);
  echo"<br>" . "<br>" . "<h2>Your unique user reference number is: $id.</h2> No
  need to remember this, we will recognise it after you log in." . "<br>" .
  "<a href='login.php'>Proceed to login</a>";
  }
  else {
  echo "Not registered" . $sql . "<br>" . $conn->error;
  }
  }
  else{
  echo "<h2>Please provide valid login and password. Min number of characters: $min_length</h2>"
  . "<br>" . "<br>" . "<a href='register.php'>Try again</a>";
  }
  mysqli_close($con);
 ?>
</body>
</html>
