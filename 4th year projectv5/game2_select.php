<?php require('php/connection.php'); ?>
<?php
    $var1 = $_POST['var1'];
	$sql = "SELECT * FROM game2 where game2ID='$var1'";
	$result = mysqli_query($link, $sql);
	$array_user = array();
	while($data = mysqli_fetch_assoc($result)){
       
		$array_user[] = $data;
	}
    
	echo json_encode($array_user);
	
?>