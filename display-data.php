<?php
    if(isset($_POST['insert'])){
        $message= "The insert function is called.";
    }
    if(isset($_POST['select'])){
        $message="The select function is called.";
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form  method="post">
        <p><?php if(isset($message)){ echo $message;}?></p >
        <input type="button" name="insert" value="insert">
        <input type="submit" name="select" value="select" >
    </form>
  </body>
</html>
