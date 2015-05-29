<?php require('php/connection.php'); ?>
<?php
$var1 = $_POST['var1']; //  update score
$var2 = $_POST['var2'];  //  timer
	
    $sql = "UPDATE scores set oldscore='$var1', Timer='$var2' where scoreID=0";
	$result = mysqli_query($link, $sql);

?>