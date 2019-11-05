<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname ) or die(mysqli_error($conn));

if(isset($conn)){
  echo "connected";
}
 ?>
