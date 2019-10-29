<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname );
error_reporting(0);


$display = "SELECT * FROM TESTINGDATABASE";
$ddisplay = mysqli_query($conn, $display);
$result = mysqli_fetch_assoc($ddisplay);
?>
<html>
<body>

<p>This is a paragraph: <span>
<?php
echo $result['firstName'];
?>
</span>
</p>
</body>
</html>
