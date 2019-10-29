<?php
include("connecttodatabase.php");
error_reporting(0);
 ?>
 <html>
 <body>
	<form method="POST" action="">
		<input type="text" name="id"/>
		<input type="text" name="inputtag"/>
    <input type="file" name="image" value="">
		<input type="submit" name="submit" value="Submit">
    <br>
    <img src="<?php echo $row['image'];?>" heigh="300" width="300">
</form>

<?php

if(isset($_POST['submit'])){
	 $i = $_POST['id'];
 	$fn = $_POST['inputtag'];
  $image = $_FILES['image'];
  $imagetmp = $files['tmp_name'];
  $imagename = $files['name'];
  $imagedestination = 'testing/'.$imagename;
  move_uploaded_file($imagetmp, $imagedestination);
	 $query = "INSERT INTO TESTINGDATABASE VALUES ('$i','$fn','$imagedestination')";
	 $data = mysqli_query($conn, $query);
if($data){
  echo "inserted";
}
else{
  echo "error";
}
$qry = "SELECT FROM TESTINGDATABASE WHERE ID=4";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
}

 ?>
</body>
</html>
