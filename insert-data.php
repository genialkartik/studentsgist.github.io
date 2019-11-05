<?php
$conn = mysqli_connect('localhost','root','','test');
?>
 <html>
 <body>
	<form method="POST" action="insert-data.php" enctype="multipart/form-data">
		<input type="text" name="id"/>
		<input type="text" name="inputtag"/>
    <input type="file" name="image" value="">
		<input type="submit" name="submit" value="Submit">
</form>

<?php

if(isset($_POST['submit'])){

	$i = $_POST['id'];
 	$fn = $_POST['inputtag'];
	$filename = $_FILES['image']['name'];
	$filetmp = $_FILES['image']['tmp_name'];
	$imagedestination = "items/".basename($_FILES['image']['name']);

	move_uploaded_file($filetmp, $imagedestination);

	$query = "INSERT INTO `TESTINGDATABASE` (`id`,`inputtag`,`imgpath`) VALUES ('$i','$fn','$imagedestination')";
	$data = mysqli_query($conn, $query) or die(mysqli_error($conn));

	if($data){
		echo "inserted";
	}
	else{
		echo "error";
	}
}
 ?>
</body>
</html>
