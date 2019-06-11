
<?php
  $con = mysqli_connect('localhost','dbname','Password',
  $config['w17037425'])
  or die("Could Not Connect to MySQL!");
  mysqli_select_db($con,"dbname")
  or die("Could Not Open Database:" . mysqli_error());

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?>
